<?php
require "./db/config.php";
if(isset($_GET['id'])){
 $id = $_GET['id']; 
 $sql = "SELECT * FROM product WHERE id='$id'";
 $result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$pname = $row['product_Name'];
$pprice = $row['product_Price'];
$pimage = $row['product_Image'];
$delevery_charge = 50;
$total_price = $pprice + $delevery_charge;
}
?>
<?php
session_start();
$_SESSION['chanel']= $total_price;
$_SESSION['product']= $pname;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete Your Order</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="#">Shopping</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse  " id="navbarSupportedContent">
    <ul class="navbar-nav  ml-auto mx-2  ">
      <li class="nav-item active pr-3 ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active pr-3">
        <a class="nav-link" href="#">Product <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active pr-3">
        <a class="nav-link" href="#">Categoriese<span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active pr-3">
        <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
</li>
    </ul>
   
  </div>
</nav>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10 " >
      <h2 class="text-primary p-2 text-center">Fill The Deatils To Complete Your Order</h2>
     <h3>Product Deatails :</h3>
     <table class="table table-bordered"width="500px">
      <tr>
        <th>Product Name :</th>
        <td><?= $pname;?></td>
        <td rowspan="4" class="text-center"> <img src="<?= $pimage; ?>" width="200px"></td>
      </tr>
      <tr>
        <th>Product Price :</th>
        <td>Rs.<?= number_format($pprice)?>/-</td>
      </tr>
      <tr>
        <th>Delevery Charge :</th>
        <td>Rs.<?= number_format($delevery_charge)?>/-</td>
      </tr>
      <tr>
        <th>Total Price :</th>
        <td>Rs.<?= number_format($total_price)?>/-</td>
      </tr>
     </table>
     <h4>Enter Your Details</h4>
   
     <form action="pay.php" method="post" accept-charset="utf-8">
      <input type="hidden" name="product_name" value="<?= $pname; ?>">
      <input type="hidden" name="product_price" value="<?= $pprice; ?>">
      <div class="form-group">
        <input type="text" name="name" placeholder="Enter Your Name" class="form-control" required>
      </div>
      <div class="form-group">
        <input type="email" name="email" placeholder="Enter Your e-mail" class="form-control" required>
      </div>
      <div class="form-group">
        <input type="tel" name="tel" placeholder="Enter Your Mobile Number" class="form-control" required>
      </div>
      <div class="form-group">
      <input type="text" name="address" placeholder="Enter Your Address" class="form-control" required>
      </div>
      <div class="form-group">
        <input type="submit" name="submit" class="btn btn-danger btn-lg " value="Click To Pay Rs. <?= $total_price; ?>/-">
      </div>
  
     </form>
    </div>
  </div>
</div>
    
</body>
</html>