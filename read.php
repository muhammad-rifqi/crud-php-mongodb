<?php
require 'vendor/autoload.php'; 

$client     = new MongoDB\Client("mongodb://localhost:27017");
$db         = $client->newsportal;
$customerCollection = $db->users;
foreach ($customerCollection->find() as $document) {
  echo $document["_id"] . "<br>";
}
