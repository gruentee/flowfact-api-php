<?php
/**
 * Created by PhpStorm.
 * User: connzen
 * Date: 18.05.16
 * Time: 15:55
 */


namespace Flowfact {

    use Doctrine\Instantiator\Exception\InvalidArgumentException;
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
        private $logger = null; // FOR DEBUGGING PURPOSES

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
                'get', 'post', 'put'
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
            $resource = strtolower(substr($name, 3));
            if(0 === strpos(strtolower($name), 'for'))
            {
                if(!empty($args[0])) 
                {
                    $resource .=  '/' . $args[0];
                }
                array_push($this->urlCache, $resource);
                return $this;
            }
            // TODO: DELETE > 3
            // decide on HTTP method and mqke request
            $method = strtolower(substr($name, 0, 3));
            if(in_array($method, $this->methods))
            {
                if($method == 'get' && !empty($args[0]))
                {
                    array_push($this->urlCache, $args[0]);
                }
                // TODO: handle arguments
                $requestBody = ($args ? $args[0] : null);
                // TODO: handle POST
                $url = $this->_buildUrl($resource);
                // flush cache
                $this->urlCache = [];
                return $this->makeRequest($method, $url);

            }
            else
            {
                throw new \Exception("Method not allowed"); // maybe change wording --> HTTP 401
            }
        }


        private function _buildUrl($url)
        {
            $cachedUrlStr = implode("/", $this->urlCache);
            if(!empty($url)) // FIXME
            {
                $url =  $cachedUrlStr != '' ? $cachedUrlStr . '/' . $url : $url;
            } else {
                $url = $cachedUrlStr;
            }
            return $url;
        }

        /**
         * @param $url URL to be requested
         * @return Psr7\Response
         */
        public function makeRequest($method, $url, $requestBody = null)
        {
            // TODO: handle POST case
            return $this->client->{$method}($url, $this->requestOptions);
            // TODO: map JSON to Entity objects
        }

        // TODO: move elsewhere
        public function isValidUuid3($uuid)
        {
            $patternUuid3 = '/^[0-9A-F]{8}-[0-9A-F]{4}-3[0-9A-F]{3}-[89AB][0-9A-F]{3}-[0-9A-F]{12}$/i';
            return preg_match($patternUuid3, $uuid) == TRUE;
        }

        public function map($data)
        {

            $mapper = new JsonMapper();
            $mapper->bExceptionOnMissingData = FALSE;
//            $mapper->setLogger($this->logger);
            // TODO: andere JSON-Mapper-Lib oder XML
            $json = json_decode($data);
            $class = array_pop(explode('.', $json->declaredType));
            $type = "\Flowfact\Resources\\" . $class;
            include(__DIR__ . '/Resources/' . $class . '.php');
            return $mapper->map($json->value, new $type);
        }
    }
}

