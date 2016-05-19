<?php
/**
 * Created by PhpStorm.
 * User: connzen
 * Date: 18.05.16
 * Time: 15:55
 */


namespace Flowfact {
    use Flowfact\Resources\UserType;
    use GuzzleHttp\Client as Http;
    use GuzzleHttp\Exception\RequestException;
    use GuzzleHttp\Psr7;
    use JsonMapper;

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
        }

        /**
         * Get a list of users
         * @return UserType[]
         */
        public function getUsers()
        {
            $url = strtolower(substr(__FUNCTION__, 3));
            $users = array();
            try {
                $response = $this->client->get($url, $this->requestOptions);
                $mapper = new \JsonMapper();
                $users[] = $mapper->mapArray(json_decode($response->getBody()->getContents()), array(),
                    '\Flowfact\Resources\UserType');
            } catch (RequestException $e) {
                echo Psr7\str($e->getRequest());
                if ($e->hasResponse()) {
                    echo Psr7\str($e->getResponse());
                }
            } catch (\JsonMapper_Exception $e) {
                echo "Mapping JSON to objects failed <br />";
            } finally {
                return $users;
            }
        }
    }
}

