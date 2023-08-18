<?php
require 'vendor/autoload.php'; 
$client     = new MongoDB\Client("mongodb://localhost:27017");
$db         = $client->newsportal;
$customerCollection = $db->users;
$result = $customerCollection->deleteOne(['username' => 'yani']);
echo "<pre>";
print_r($result);
?>