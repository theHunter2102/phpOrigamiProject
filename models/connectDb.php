<?php
$serverNameDb="localhost";
$usernameDb="root";
$passwordDb="";
$dbName="eproject_aptech";
global $conn;
$conn= new mysqli($serverNameDb,$usernameDb,$passwordDb,$dbName);

if ($conn->connect_error)
{
    die("Connection failed".$conn->connect_error);
}

?>