<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title> 
    <script src="../js/registerValidation.js"></script>

    <style>
        
    body{
    height: 100%;
    background-color: #f7d9cf;

    }

    h1{
        color: #6f4f3a;
    }

    .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: rgb(204, 204, 204);
    color: white;
    text-align: center;
    }

    .navbar {
    width: 100%;
    background-color: whitesmoke;
    overflow: auto;
    height: 50px;
    }

    .navbar a {
    float: left;
    text-align: center;
    padding: 12px;
    color: #6f4f3a;
    text-decoration: none;
    font-size: 17px;
    }
  
    .navbar a:hover {
    background-color: #ffffff88;
    }
    </style>
</head>
<body>
<div class="navbar">
    <a href="index.php">Home</a>
    <a href="AboutUs.php">Contact</a>
    <a href="Shop.php">Shop</a>
  </div>
    <h1>Enter your information</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="name" placeholder="name..."> <br><br>
        <input type="text" name="surname" placeholder="surname..."> <br><br>
        <input type="email" name="email" placeholder="email..."> <br><br>
        <input type="text" name="username" placeholder="username..."><br><br>
        <input type="password" name="password" placeholder="password..."><br><br>

        <input type="submit" name="registerBtn" value="register" id="btn" id="registerBtn"><br><br>
    </form>

   <?php include_once '../controller/registerController.php';?>
</body>

<footer>
  
  <div class="footer">
    <p>All rights reserved by Rina Rexhepi & Lorent Kelani 2021-2022</p>
  </div>

</footer>
</html>