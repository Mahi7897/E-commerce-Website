<?php
$dbhost = "localhost";
$dbuser="root";
$dbpass="";

$conn= mysqli_connect($dbhost,$dbuser,$dbpass);



if(!$conn){
    die("sorry we can't connect to database". mysqli_connect_error());
}
$sql = "CREATE DATABASE shopping" ;
if(mysqli_query($conn,$sql)){
     echo "database created" ;
}else{
echo "not connected";
}
?>