<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <script src="../js/loginValidation.js"></script>

  <style>
  body{
  height: 100%;
  background-color: #f7d9cf;
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

.LRform{
    display: flex;
  }

.firstdiv{
   text-align: center;
  } 

 .login{
 
   width: 100%;
  padding: 12px 20px;
  margin: 8px;
  margin top: 40px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  }
  

</style>
</head>
<body>
  
    <div class="navbar">
    <a href="index.php">Home</a>
    <a href="AboutUs.php">Contact</a>
    <a href="Shop.php">Shop</a>
       </div>
      
   <div class="firstdiv">
     <h2>Log in</h2>
   </div>
      <div>
        <div id="error"></div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="login" method="POST">
         <div class="field1">
         <label for="email"></label>
              <input type="email" name="email" placeholder="Enter email" id="email"><br><br>
          </div>
          <div class="field2">
         <label for="password"></label>
              <input type="password" name="password" placeholder="Enter password" id="password" autocomplete="new-password"><br><br>
          </div>
          <button type="submit" class="btn" id="btn" name="login">Log in</button>
        </form>
    </div>

    <?php 
        require_once '../controller/loginController.php';
    ?>
</body>
</html>


<footer>
  
  <div class="footer">
    <p>All rights reserved by Rina Rexhepi & Lorent Kelani 2021-2022</p>
  </div>

</footer>