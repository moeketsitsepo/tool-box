<?php

$host = "localhost";
$user = "root";
$password = "";
$dbName = "database123";

if(!$connection = mysqli_connect($host,$user,$password,$dbName))
{
    die("Failed to connect to database");
}

