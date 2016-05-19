<?php
/**
 * Created by PhpStorm.
 * User: connzen
 * Date: 11.05.16
 * Time: 20:29
 */

define('BASE_URI', 'https://flowfactapi.flowfact.com/com.flowfact.server/api/rest/v1.0/customers/301001/');

//$user = '301001/Klaus Erfölg';
//$pw	  = 'P0werYourL1fe';

// TODO: maybe rework this in YAML and parse with Symfony YAML parser
// TODO: maybe rename keys to to parsing more automatically
return array(
    'test' => array(
        'username' => 'test',
        'password' => '123456',
        'customer_id' => '301001',
        'api_base_url' => 'https://flowfactapi.flowfact.com/com.flowfact.server/api/rest/v1.0/customers/'
    )
);

//return $config;