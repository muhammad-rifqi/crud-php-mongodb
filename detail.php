
<?php
require 'vendor/autoload.php'; 
$client     = new MongoDB\Client("mongodb://localhost:27017");
$db         = $client->newsportal;
$customerCollection = $db->users;
$userid = 'ahsan';
$result =  $customerCollection->findOne(['username' => (string)$userid]);

    echo ($result["_id"]);
  
?>