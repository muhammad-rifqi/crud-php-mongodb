<?php
require 'vendor/autoload.php'; // include Composer's autoloader
// membuat koneksi ke mogo server
$client     = new MongoDB\Client("mongodb://localhost:27017");
// memilih database yang ingin digunakan
$db         = $client->newsportal;
// memilih collecttion
$customerCollection = $db->users;
// insert data ke colection
$result = $customerCollection->insertOne( ['username' => 'yani', 'password' => '12345', 'access' => 'user'] );
echo "Inserted with Object ID '{$result->getInsertedId()}'";