<?php


require "./db/stripConfig.php";

$token = $_POST ["stripeToken"];
$data = \Stripe\Charge::create(array(
  "data-amount" => 500,
 "data-description"=>"vivo",
 "source" => $token,
));
echo "<pre>";
print_r($data);
?>