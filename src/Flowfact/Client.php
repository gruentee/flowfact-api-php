<?php
/**
 * Created by PhpStorm.
 * User: connzen
 * Date: 18.05.16
 * Time: 15:55
 */


namespace Flowfact {

    use Flowfact\Resources\Users;
    use Flowfact\Resources\UserType;
    use GuzzleHttp\Client as Http;
    use GuzzleHttp\Exception\RequestException;
    use GuzzleHttp\Psr7;

    class Client
    {
        private $apiUser = null;
        private $apiPass = null;
        private $apiCustomerId = null;
        private $apiUrl = null;
        private $acceptFormat = null;
        private $client = null;
        private $headers = array();
        private $requestOptions = array();

        public function __construct($config='test', $acceptFormat='json')
        {
            // TODO: load configuration
            $conf = require_once 'config/config.inc.php';

            // TODO: do config validation
            $conf = $conf[$config];
            $this->apiUser = $conf['username'];
            $this->apiPass = $conf['password'];
            $this->apiCustomerId = $conf['customer_id'];
            $this->apiUrl = $conf['api_base_url'] . $this->apiCustomerId . "/";
            $this->acceptFormat = $acceptFormat;
            $this->requestOptions['auth'] = ["{$this->apiCustomerId}/{$this->apiUser}", $this->apiPass];
            // configure Guzzle
            $this->client = new Http([
                'base_uri' => $this->apiUrl
            ]);
        }

        /**
         * Get a list of users
         * @return Users array
         */
        public function getUsers()
        {
            $url = 'users';
            try {
                $response = $this->client->get($url, $this->requestOptions);
                // TODO: transform to array of User objects
                return $response->getBody()->getContents();
            } catch (RequestException $e) {
                echo Psr7\str($e->getRequest());
                if ($e->hasResponse()) {
                    echo Psr7\str($e->getResponse());
                }
            }
        }
    }
}

