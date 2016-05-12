<?php
/**
 * Created by PhpStorm.
 * User: connzen
 * Date: 10.05.16
 * Time: 21:33
 */

require_once 'vendor/autoload.php';

define('API_BASE_URL', 'https://flowfactapi.flowfact.com/com.flowfact.server/api/rest/v1.0/');

$user = '301001/Klaus Erfölg';
$pw	  = 'P0werYourL1fe';
$headers = array(
    'Accept' => 'application/json',
    'Accept-Charset' => 'UTF-8'
);


$response = \Httpful\Request::get(API_BASE_URL . 'customers/301001/users')
    ->authenticateWithBasic(urlencode($user), $pw)
    ->addHeaders($headers)
    ->send();

print_r($response);
