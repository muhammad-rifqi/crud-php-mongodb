<?php
require 'vendor/autoload.php'; 

$client     = new MongoDB\Client("mongodb://localhost:27017");
$db         = $client->newsportal;
$customerCollection = $db->users;
$result = $customerCollection->updateOne( ['username'=>'admin'], [ '$set' => ['username' => 'Rifqi MHD AJA', 'password' => '1234586858', 'access' => 'user'] ] );
echo "<pre>";
print_r($result);