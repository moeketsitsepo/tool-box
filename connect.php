<?php

include_once("config.php");

if(isset($_POST['save']))
{
    $Name = $_POST['Name'];
    $StudNumber = $_POST['StudNumber'];
    $password = md5($_POST['password']);


    $stmt = $connection->prepare("Insert into personal_details (Name,StudNumber,password)
    values (?,?,?)");

    $stmt->bind_param("sss",$Name,$StudNumber,$password);
    $stmt->execute();
    echo "Registration Sucessfully";
    $stmt->close();
    $connection->close();
    header("Location:login.php");
   
}