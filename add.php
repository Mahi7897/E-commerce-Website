<?php
require "./db/config.php";
$msg;
if (isset($_POST["submit"])) {
    $p_Name = $_POST["pName"];
    $p_Price = $_POST["pPrice"];
    $target_dir = "Image/";
    $target_file = $target_dir . basename($_FILES["pImage"]["name"]);
    move_uploaded_file($_FILES["pImage"]["tmp_name"], $target_file);

    $sql = "INSERT INTO product(product_Name,product_Price,product_Image) values('$p_Name','$p_Price','$target_file')";
    if (mysqli_query($conn, $sql)) {
        $msg = "Product Added Successfully";
    } else {
        $msg = "Added Failed";
    };
}

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

<body class="bg-info">
    <div class="conatainer">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5 bg-light rounded">
                <h1 class="text-center p-2">Add Product</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="pName" placeholder="Product Name" class="form-control p-2 " required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="pPrice" placeholder="Product Price" class="form-control p-2 " required>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" name="pImage" class="form-control p-2 custom-file-input " id="customFile" required>
                            <label for="customFile" class="custom-file-label">Choose Product Image </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-danger p-2 btn-block">
                    </div>
                    <div class="form-group">
                        <h4 class="text-center"><?= $msg;?></h4>
                    </div>
                </form>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 p-3 mt-5 bg-light rounded">
                <a href="index.php" class="btn btn-warning form-control btn-block">
                    <h4>Go To Product List</h4>
                </a>
            </div>
        </div>
    </div>
</body>

</html>