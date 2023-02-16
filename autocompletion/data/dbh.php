<?php

$host = 'localhost';
$dbname = 'autocompletion';
$username = 'root';
$password = '';

try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

} catch (PDOException $pe) {

    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

