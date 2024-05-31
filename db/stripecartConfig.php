<?php
$dbhost="localhost";
$dbuser= "root";
$dbpass= "";
$dbname="payments";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("conection not established". mysqli_connect_error());
}





?>