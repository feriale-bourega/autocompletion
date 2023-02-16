<?php

require_once("dbh.php");


//  Get cities name
$get = $conn->prepare("SELECT name, description, capitalcity, continent, population FROM voyages");
$get->execute();
$res = $get->fetchAll(PDO::FETCH_ASSOC);

$myJSON = json_encode($res);

echo $myJSON;