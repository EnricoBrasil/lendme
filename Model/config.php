<?php

$hostname = "sql105.byethost7.com";
$username = "b7_35017809";
$password = "ProPI10101";
$dbname = "b7_35017809_lendme";

$con = mysqli_connect($hostname,$username,$password);

if(!$con){
    die("Connection failed: " .mysqli_connect_error());
}

?>