<?php
require 'vendor/autoload.php';
 
 
$token = "dev-PKXF5xYE";
 
$client = new GuzzleHttp\Client(['base_uri' => 'http://rest01.webservice.zhq.pl/api/']);
 
$headers = [
    'Authorization' => 'Bearer ' . $token,        
    'Accept'        => 'application/json',
];