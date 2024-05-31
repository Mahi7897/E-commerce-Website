
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
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
<?php
require "./db/config.php";
$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
?>
<div class="container">
  <div class="row justify-content-center">
    <?php
  while ($row = mysqli_fetch_array($result)){
    ?>
<div class ="col-md-4 mt-3 mb-3">
  <div class ="card-deck">
    <div class ="card border-info p-2 m-5">
    <img src="<?= $row['product_Image']; ?>"  class="card-img-top" height="350">
    <h5 class="card-title pt-3 ">Product : <?= $row['product_Name']  ?></h5>
    <h3 class="">Price : <?= $row['product_Price']?></h3>
    <a href="order.php?id=<?= $row['id'] ?>" class="btn btn-danger p-2"> Buy Now</a>
    </div>
  </div>
 
</div>
  <?php } ?>
  </div>
</div>
    
</body>
</html>
  