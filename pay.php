<?php
session_start();
$total= $_SESSION["chanel"];
$productname = $_SESSION['product'];

require "./db/stripecartConfig.php";
if(isset($_POST["submit"])){
  $buyer_name= $_POST['name'];
  $buyer_email= $_POST['email'];
  $buyer_mobile= $_POST['tel'];
  $buyer_address= $_POST['address'];
 
}
$sql=" INSERT INTO payment( buyer_name, buyer_email, buyer_mobile,buyer_address,txt_amount)
 VALUES ('$buyer_name', '$buyer_email','$buyer_mobile','$buyer_address','$total')";

mysqli_query($conn,$sql)

?>

<?php
require "./db/stripConfig.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h2 class="text-center text-primary mt-2 mb-2">Your Payment Details</h2>
      <form action="submit.php" method="post">
        <table class="table table-bordered form-group" width="300px">
          <tr>
            <td> Name :</td>
            <td><?= $buyer_name;?></td>
          </tr><tr>
            <td> E-mail :</td>
            <td><?= $buyer_email;?></td>
          </tr>
          <tr>
            <td> Mobile Number :</td>
            <td><?= $buyer_mobile;?></td>
          </tr>
          <tr>
            <td>Address :</td>
            <td><?= $buyer_address;?></td>
          </tr>
          <tr>
            <td>Product Info :</td>
            <td><?= $productname;?></td>
          </tr>
          <tr>
            <td>Payable Amount :</td>
            <td>Rs. <?= $total;?> /-</td>
          </tr>


        </table>
<script
           src="https://checkout.stripe.com/checkout.js" class="stripe-button"
           data-key="<?= $Publishablekey; ?>"
           data-name="<?= $buyer_name; ?>"
           data-email="<?= $buyer_email; ?>"
           data-amount="<?= $total*100;?>"
           data-description="<?= $productname; ?>"
           data-currency="INR"
           >
 </script>
      </div>
    </div>
  </div>
  </body>
</html>


</form>




