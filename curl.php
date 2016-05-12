<?php
/**
 * Created by PhpStorm.
 * User: connzen
 * Date: 11.05.16
 * Time: 20:29
 */

require('conf.inc.php');
// test
$user = '301001/' . urlencode('Klaus Erfölg');

$process = curl_init(BASE_URI . 'users');
curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
curl_setopt($process, CURLOPT_HEADER, 1);
curl_setopt($process, CURLOPT_USERPWD, $user . ":" . $pw);
curl_setopt($process, CURLOPT_TIMEOUT, 30);
curl_setopt($process, CURLOPT_TIMEOUT, 30);
//curl_setopt($process, CURLOPT_POSTFIELDS, $payloadName);
curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
$return = curl_exec($process);
curl_close($process);

print_r($return);
print($user);