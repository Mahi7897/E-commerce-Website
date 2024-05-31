<?php

require "./stripecartConfig.php";
$sql = "CREATE TABLE payment(
    id int(6) auto_increment primary key,
    buyer_name varchar(30) not null,
   buyer_email varchar(30) not null,
    buyer_mobile varchar(300) not null,
    buyer_address varchar(300) not null,
    txt_id varchar(100) not null,
    txt_amount int(100) not null
)";

if(mysqli_query($conn, $sql)){
    echo "created";
};

?>