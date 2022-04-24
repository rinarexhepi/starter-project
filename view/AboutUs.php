<!DOCTYPE html>
<html lang="en">
<link href="../css/AboutUs.css" rel="stylesheet" type="text/css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Our Team</title>
</head>
<body>
   
  <link rel="stylesheet" href="file:///C:\xampp\htdocs\RinaRexhepi-Projekti">
  
  <div class="navbar">
    <a href="index.php">Home</a>
    <a href="AboutUs.php">Contact</a>
    <a href="Shop.php">Shop</a>       
  </div>      

  <div class="our-team">
        <div class="info">
        <h2>Get in touch with our team</h2>
            <form action="">
        <h3>Please enter your information</h3>
            <input type="text" name="fullname" id="fullname" placeholder="Full Name *" required>
            <input type="email" name="email" id="email" placeholder="Email *" required>
            <input type="text" name="company" id="company" placeholder="Company *" required>
            <label for="customercheck">Are you an existing customer? *</label>
            <div class="customer-check-wrap">
                <span>Yes</span>
                <input type="radio" name="customercheck" id="customercheck" value="yes" required>
                <span>No</span><input type="radio" name="customercheck" id="customercheck" value="no" required>

        </div>

        <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Enter your message:"></textarea>
        <button type="Submit">Send</button>
        </form>  
  </div>

  <div class="team">
  <h2>Meet our team</h2>
            <p>Live support available 8am-5pm Mon-Fri</p>
                    <div class="employee-wrapper">
                        <div class="employee">
                            <img src="../images/donna.jpg" />
                            <p>Donna Paulsen</p>
                        </div>
                        <div class="employee">
                            <img src="../images/samantha.jpg" />
                            <p>Samantha Wheeler</p>
                        </div>
                        <div class="employee">
                            <img src="../images/jessica.jpg" />
                            <p>Jessica Pearson</p>
                        </div>


                    </div>

        </div>


</body>

<footer>
  
  <div class="footer">
    <p>All rights reserved by Rina Rexhepi & Lorent Kelani 2021-2022</p>
  </div>

</footer>
</html>