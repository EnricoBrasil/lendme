<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "lendmepi";

$con = mysqli_connect($hostname,$username,$password);

if(!$con){
    die("Connection failed: " .mysqli_connect_error());
}

?>