
<?php

require "config.php";
$sql = "CREATE TABLE product(
    id int(6) auto_increment primary key,
    product_Name varchar(30) not null,
    product_Price varchar(30) not null,
    product_Image varchar(300) not null
)";

if(mysqli_query($conn, $sql)){
    echo "created";
};

?>