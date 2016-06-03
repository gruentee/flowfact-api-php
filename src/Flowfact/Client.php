<?php
/**
 * Created by PhpStorm.
 * User: connzen
 * Date: 18.05.16
 * Time: 15:55
 */


namespace Flowfact {

    use Doctrine\Instantiator\Exception\InvalidArgumentException;
    use Flowfact\Resources\ContactType;
    use Flowfact\Resources\UserType;
    use GuzzleHttp\Client as Http;
    use GuzzleHttp\Exception\RequestException;
    use GuzzleHttp\Psr7;
    use JsonMapper;
    use Monolog\Handler\StreamHandler;
    use Monolog\Logger;

    class Client
    {
        private $username = null;
        private $password = null;
        private $customerId = null;
        private $baseUrl = null;
        private $acceptFormat = null;
        private $client = null;
        private $headers = array();
        private $requestOptions = array();
        private $urlCache = array();
        private $logger = null;

        public function __construct($username, $password, $customerId, $baseUrl, $acceptFormat = 'json')
        {
            $this->_authenticate($username, $password, $customerId); // maybe decouple base URL construction and auth??
            $this->baseUrl =  $baseUrl . '/' . $this->customerId . '/';

            $this->acceptFormat = $acceptFormat;
            $this->requestOptions['headers'] = [
                'Accept' => 'application/' . $acceptFormat
            ];
            $this->client = new Http(['base_uri' => $this->baseUrl]);
            // allowed HTTP methods
            $this->methods = [
                'get', 'post'
            ];
            // DEBUG: set up logger
            $logger = new Logger('application_logger');
            $logger->pushHandler(new StreamHandler(__DIR__.'/debug.log', Logger::DEBUG));
            $this->logger = $logger;
            $this->username = $username;
            $this->password = $password;
            $this->customerId = $customerId;
        }

        /**
         * @param $username
         * @param $password
         * @param $customerId
         */
        private function _authenticate($username, $password, $customerId)
        {
            if(strlen($username) < 1  || !is_string($username)
                || strlen($password) < 1 || !is_string($password))
            {
                throw new \InvalidArgumentException('Username and password must be strings with length > 0');
            }
            // TODO: handle Ümläuts 
            $this->username = $customerId ."/" . $username;
            $this->password = $password;
            $this->customerId = $customerId;
            $this->requestOptions['auth'] = [$this->username, $this->password];
        }

        /**
         * @param $name
         * @param $args
         * @return $this
         * @throws \Exception
         */
        public function __call($name, $args)
        {
            // TODO: nicht sicher, da strlen("patch") > 3
            $method = substr(strtolower($name), 0, 3);
            if(in_array($method, $this->methods))
            {
                $urlPart = strtolower(substr($name, 3));
                // wenn get{Stuff} --> Args[0] an URL anhängen
                if($method == 'get' && !empty($args[0]))
                {
                    // TODO: handle multiple args??
                    $urlPart .=  '/' . $args[0];
                }
                // TODO: handle arguments
                $requestBody = ($args ? $args[0] : null);
                // TODO: handle POST
                $this->response = $this->makeRequest($method, $urlPart);
                array_push($this->urlCache, $urlPart);
                return $this;
            }
            else
            {
                throw new \Exception("Method not allowed");
            }
        }


        private function _buildUrl($url)
        {
            $cached = implode("/", $this->urlCache);
            $url =  $cached != '' ? $cached . '/' . $url : $url;
            return $url;
        }
        /**
         * @param $url URL to be requested
         * @return Psr7\Response
         */
        public function makeRequest($method, $url, $requestBody = null)
        {
            $url = $this->_buildUrl($url);
            // TODO: handle POST case
            return $this->client->{$method}($url, $this->requestOptions);
            // TODO: map JSON to Entity objects
        }

        public function isValidUuid3($uuid)
        {
            $patternUuid3 = '/^[0-9A-F]{8}-[0-9A-F]{4}-3[0-9A-F]{3}-[89AB][0-9A-F]{3}-[0-9A-F]{12}$/i';
            return preg_match($patternUuid3, $uuid) == TRUE;
        }
    }
}

