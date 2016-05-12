<?php
//namespace FlowfactApiTest;

require_once __DIR__ . '/vendor/autoload.php';
//require_once __DIR__ . '/vendor/mashape/unirest-php/src/Unirest.php';
//use Unirest\Response;
//use Unirest\Request;


define('API_BASE_URL', 'https://flowfactapi.flowfact.com/com.flowfact.server/api/rest/v1.0/');

//$user = urlencode('301001/Klaus Erfölg');
$user = '301001/Klaus Erfölg';
$pw	  = 'P0werYourL1fe';
$headers = array(
    'Accept' => 'application/json',
);

Unirest\Request::auth($user, $pw);

$users = API_BASE_URL . 'customers/301001/users';
print($users . "<br />");

$response = Unirest\Request::get(
    $users
//    , $headers
);

print_r($response->body);
print_r($response->headers);