<?php

// implementing the package

require_once __DIR__ . '/vendor/autoload.php';

use Decipher\Api\Survey;

/* $client = new Client([
   'url'     => 'https://v2.decipherinc.com/api',  
   'token'   => ''                                 
]);

$client->get(); 
 
$client->post();*/

// implementation scratch

$survey = new Survey([
  'url'     => 'https://v2.decipherinc.com/api',
  'api_key' => 'fewatji4ur8u4qjfisafu09dsauf'// sample key
]);

// sample method call 
$survey->data()->downloadData();