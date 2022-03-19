<?php
$serverName="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="educare_project_2";

$conn= mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}