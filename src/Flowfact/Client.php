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
    use JMS\Serializer\SerializerBuilder;

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
            $this->setAcceptFormat($acceptFormat);
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
            $prefix = substr($name, 0, 3);
            $method = $this->_getHttpVerb($name);
            $allowedPrefixes = ['get', 'for'];
            $resource = strtolower(substr($name, 3));
            // build URL
            if(in_array($prefix, $allowedPrefixes) AND !empty($resource))
            {
                $this->urlCache[] = $resource;
                if(!empty($args[0]))
                {
                    $this->urlCache[] = $args[0];
                }
                return $this;
            }
            if(false !== $method)
            {
                // TODO: handle arguments
                $requestBody = ($args ? $args[0] : null);
                // TODO: handle POST
                $url = $this->_buildUrl();
                // flush cache
                $this->urlCache = [];
                return $this->makeRequest($method, $url, $requestBody);
            }
            else
            {
                throw new \Exception("Method not allowed"); // maybe change wording --> HTTP 401
            }
        }

        private function _getHttpVerb($call)
        {
            foreach($this->methods as $method)
            {
                if(0 === strpos(strtolower($call), $method))
                    return $method;
            }
            return false;
        }


        private function _buildUrl()
        {
            $cachedUrlStr = implode("/", $this->urlCache);
            return $cachedUrlStr;
        }

        /**
         * @param $method
         * @param $url URL to be requested
         * @param null $requestBody
         * @return Psr7\Response
         */
        public function makeRequest($method, $url, $requestBody = null)
        {
            if(null !== $requestBody)
            {
                // TODO: handle XML content type
                $this->requestOptions['json'] = $requestBody;
            }
            return $this->client->{$method}($url, $this->requestOptions);
        }
        
        public function map($data)
        {
            // DI nutzen, um verschiedene Mapper einzubinden, dann $this->mapper->map($data)
            $obj = null;
            switch ($this->getAcceptFormat()) {
                case 'json':

                    // Use JsonMapper
                    $mapper = new JsonMapper();
                    $mapper->bExceptionOnMissingData = FALSE;
//                    $mapper->setLogger($this->logger);
                    // TODO: andere JSON-Mapper-Lib oder XML
                    $json = json_decode($data);
                    $class = array_pop(explode('.', $json->declaredType));
                    $type = "\Flowfact\Resources\\" . $class;
                    include(__DIR__ . '/Resources/' . $class . '.php');
                    $obj = $mapper->map($json->value, new $type);

                    // use jms/serializer
                    /*$json = json_decode($data);
                    $class = array_pop(explode('.', $json->declaredType));
                    // DEBUG log
                    $type = "\Flowfact\Resources\\" . $class;
                    $this->logger->log("debug", $type);
                    $serializer = SerializerBuilder::create()->build();
                    $obj = $serializer->deserialize($data, $type, 'json');*/
                    break;
                case 'xml':
                    try {
                        $obj = new \SimpleXMLElement($data);
                        return $obj;
                    } catch (Exception $e) {
                        echo "Exception occurred: " . $e->getMessage();
                        echo $e->getTraceAsString();
                    }
                    break;
                default:
                    break;
            }
            return $obj;
        }

        /**
         * @return null|string
         */
        public function getAcceptFormat()
        {
            return $this->acceptFormat;
        }

        /**
         * @param null|string $acceptFormat
         */
        public function setAcceptFormat($acceptFormat)
        {
            $this->acceptFormat = $acceptFormat;
            $this->requestOptions['headers'] = [
                'Accept' => 'application/' . $acceptFormat
            ];
        }
    }
}

