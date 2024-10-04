<?php
session_start();

$host = 'localhost'; // Database host
$dbname = 'commerce_hrmis'; // Database name
$username = 'root'; // Database username
$password = 'usbw'; // Database password

try {
   $_SESSION['access_token']=true;
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
} 
?>
  