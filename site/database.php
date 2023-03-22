<?php
$servername = "mariadb";
$database = "receptenboek";
$username = "user";
$password = "password";

try { //and
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch (PDOException $e) { //bitch
  echo "Connection failed: " . $e->getMessage();
}
