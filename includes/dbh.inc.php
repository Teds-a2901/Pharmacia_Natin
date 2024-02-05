<?php

$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "pharmacianatin";

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

if(!$conn){
    die("Connection Field:". mysqli_connect_error());

}