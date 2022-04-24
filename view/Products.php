<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="../css/Products.css">
</head>
<body background-color: #f7d9cf;>

<h3>Enter product information</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="number" name="code" placeholder="code"> <br><br>
        <input type="text" name="name" placeholder="name"> <br><br>
        <input type="file" name="image" id="image" style="border: none;" >  <br><br>
        <input type="text" name="description" placeholder="description"><br><br>
        <input type="text" name="price" placeholder="price"><br><br>

        <input type="submit" name="registerBtn" value="register" id="btn" id="registerBtn"><br><br>
    </form>

   <?php include_once '../controller/productController.php';?>
    
</body>

<footer>
  
  <div class="footer">
    <p>All rights reserved by Rina Rexhepi & Lorent Kelani 2021-2022</p>
  </div>

</footer>
</html>


