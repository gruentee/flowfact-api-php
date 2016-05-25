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
        private $logger = null;

        public function __construct($username, $password, $customerId, $baseUrl, $acceptFormat = 'json')
        {
            // TODO: load configuration
            // TODO: do config validation
            $this->username = $customerId ."/" . $username;
            $this->password = $password;
            $this->customerId = $customerId;
            $this->baseUrl = $baseUrl . '/' . $this->customerId . '/';
            $this->acceptFormat = $acceptFormat;
            $this->requestOptions['auth'] = [$this->username, $this->password];
            $this->requestOptions['headers'] = array(
                'Accept' => 'application/' . $acceptFormat
            );
            // configure Guzzle
            $this->client = new Http([
                'base_uri' => $this->baseUrl
            ]);
            // set up logger
            $logger = new Logger('application_logger');
            $logger->pushHandler(new StreamHandler(__DIR__.'/debug.log', Logger::DEBUG));
            $this->logger = $logger;
        }
        
//        private function doRequest($url, $method='GET')
//        {
//            // TODO: maybe validate URL
//            $response = null;
//            try {
//                $response = $this->request->{strtolower($method)}($url, $this->requestOptions);
//            }
//        }

        /**
         * Get a list of users
         * @return UserType[]
         */
        public function getUsers()
        {
            $url = 'users';
            $users = array();
            // TODO: Exceptions werfen statt abfangen
            try {
                $response = $this->client->get($url, $this->requestOptions);
                $mapper = new \JsonMapper();
                $mapper->bExceptionOnMissingData = false;
//                $mapper->setLogger($this->logger);
                $json = json_decode($response->getBody()->getContents());
                // debug
//                $this->logger->addDebug('Parsing user', $json->value->user);
                $users[] = $mapper->mapArray($json->value->user, array(), '\Flowfact\Resources\UserType');
            } catch (RequestException $e) {
                echo Psr7\str($e->getRequest());
                if ($e->hasResponse()) {
                    echo Psr7\str($e->getResponse());
                }
            } catch (\JsonMapper_Exception $e) {
                echo "Mapping JSON to Entity objects failed: <br />";
                echo $e->getMessage();
                echo $e->getTraceAsString();
            } finally {
                return $users;
            }
        }

        /**
         * Get a single user
         * @param userId string
         * @return UserType
         * @throws \InvalidArgumentException
         */
        public function getUser($userId)
        {
            // TODO: validate on RegEx // UUID-1
            if(empty($userId) || !is_string($userId))
            {
                throw new \InvalidArgumentException(__CLASS__.'::'.__FUNCTION__." requires parameter \$userId to be 
                a string!");
            }
            $url = 'user/' . $userId;

            try {
                $response = $this->client->get($url, $this->requestOptions);
            } catch (\Exception $e) {
                
            }

            return;
        }


        /**
         * Get all contacts of a given user
         * @param userId string
         * @return ContactType[]
         * @throws \InvalidArgumentException
         */
        public function getContactsByUser($userId)
        {
            // TODO: validate on RegEx
            if(empty($userId) || !is_string($userId))
            {
                throw new \InvalidArgumentException(__CLASS__.'::'.__FUNCTION__." requires parameter \$userId to be 
                a string!");
            }


        }

        /**
         *  Get Characteristics
         * @param string|null $realm to filter the type of activities queried
         * @throws \InvalidArgumentException
         */
        public function getCharacteristics($realm=null)
        {
            $realms = ['activities', 'estates', 'inquiries', 'contacs'];
            if(!is_null($realm) && !in_array($realm, $realms))
            {
                throw new \InvalidArgumentException(__CLASS__.'::'.__FUNCTION__.' requires parameter $realm to be 
                empty or one of string values ' . implode(', ', $realms));
            }


        }
    }

    public function forCurrentUser($field)
    {
        // TODO: Struktur fluentApi überlegen
        // TODO: für Adressen umsetzen
        // JSON-Mapping -> andere lib?

    }
}

