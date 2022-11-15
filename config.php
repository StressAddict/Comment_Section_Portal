<?php


$host = 'localhost';
$user = 'root';
$password = 'root';
$dbname = 'commentportal';

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

$options = 
[
 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
 PDO::ATTR_EMULATE_PREPARES => false,
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];

try
{
 $pdo = new PDO($dsn, $user, $password, $options);
}
 catch(Exception $e)
 {
  error_log($e->getMessage());
  exit('An Error Has Occurred');
 }


// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


?>