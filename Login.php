<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login/Contact</title>
</head>
<body>
  
    <div class="navbar">
        <a href="file:///file:///C:\xampp\htdocs\RinaRexhepi-Projekti\index.html#">Home</a>
        <a href="file:///file:///C:\xampp\htdocs\RinaRexhepi-Projekti\Contact.html">Contact</a>
        <a href="file:///file:///C:\xampp\htdocs\RinaRexhepi-Projekti\Shop.html">Shop</a>
      </div>
    
  <link href="css/Login.css" rel="stylesheet" type="text/css">
  <ul class="nav">
    <li onclick="showLogin()">Login</li>
    <li onclick="showSignup()">Sign up</li>
    <li onclick="showForgotPassword()">Forgot password</li>
    <li onclick="showSubscribe()">Subscribe</li>
    <li onclick="showContactUs()">Contact us</li>
  </ul>
  <div class="wrapper">
    <div class="rec-prism">
      <div class="face face-top">
        <div class="content">
          <h2>Subscribe</h2>
          <small>Enter your email so we can send you the latest updates!</small>
          <form onsubmit="event.preventDefault()">
            <div class="field-wrapper">
              <input type="text" name="email" placeholder="email">
              <label>e-mail</label>
            </div>
            <div class="field-wrapper">
              <input type="submit" onclick="showThankYou()">
            </div>
          </form>
        </div>
      </div>
      <div class="face face-front">
        <div class="content">
          <h2>Sign in</h2>
          <form onsubmit="event.preventDefault()">
            <div class="field-wrapper">
              <input type="text" name="username" placeholder="username">
              <label>username</label>
            </div>
            <div class="field-wrapper">
              <input type="password" name="password" placeholder="password" autocomplete="new-password">
              <label>password</label>
            </div>
            <div class="field-wrapper">
              <input type="submit" onclick="showThankYou()">
            </div>
            <span class="psw" onclick="showForgotPassword()">Forgot Password?   </span>
            <span class="signup" onclick="showSignup()">Not a user?  Sign up</span>
          </form>
        </div>
      </div>
      <div class="face face-back">
        <div class="content">
          <h2>Forgot your password?</h2>
          <small>Enter your email so we can send you a reset link for your password</small>
          <form onsubmit="event.preventDefault()">
            <div class="field-wrapper">
              <input type="text" name="email" placeholder="email">
              <label>e-mail</label>
            </div>
            <div class="field-wrapper">
              <input type="submit" onclick="showThankYou()">
            </div>
          </form>
        </div>
      </div>
      <div class="face face-right">
        <div class="content">
          <h2>Sign up</h2>
          <form onsubmit="event.preventDefault()">
            <div class="field-wrapper">
              <input type="text" name="email" placeholder="email">
              <label>e-mail</label>
            </div>
            <div class="field-wrapper">
              <input type="password" name="password" placeholder="password" autocomplete="new-password">
              <label>password</label>
            </div>
            <div class="field-wrapper">
              <input type="password" name="password2" placeholder="password" autocomplete="new-password">
              <label>re-enter password</label>
            </div>
            <div class="field-wrapper">
              <input type="submit" onclick="showThankYou()">
            </div>
            <span class="singin" onclick="showLogin()">Already a user?  Sign in</span>
          </form>
        </div>
      </div>
      <div class="face face-left">
        <div class="content">
          <h2>Contact us</h2>
          <form onsubmit="event.preventDefault()">
            <div class="field-wrapper">
              <input type="text" name="name" placeholder="name">
              <label>Name</label>
            </div>
            <div class="field-wrapper">
              <input type="text" name="email" placeholder="email">
              <label>e-mail</label>
            </div>
            <div class="field-wrapper">
              <textarea placeholder="your message"></textarea>
              <label>your message</label>
            </div>
            <div class="field-wrapper">
              <input type="submit" onclick="showThankYou()">
            </div>
          </form>
        </div>
      </div>
      <div class="face face-bottom">
        <div class="content">
          <div class="thank-you-msg">
            Thank you!
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<script>
    let prism = document.querySelector(".rec-prism");

function showSignup(){
  prism.style.transform = "translateZ(-100px) rotateY( -90deg)";
}
function showLogin(){
  prism.style.transform = "translateZ(-100px)";
}
function showForgotPassword(){
  prism.style.transform = "translateZ(-100px) rotateY( -180deg)";
}

function showSubscribe(){
  prism.style.transform = "translateZ(-100px) rotateX( -90deg)";
}

function showContactUs(){
  prism.style.transform = "translateZ(-100px) rotateY( 90deg)";
}

function showThankYou(){
  prism.style.transform = "translateZ(-100px) rotateX( 90deg)";
}
</script>

<footer>
  
  
  
  <div class="footer">
    <p>All rights reserved by Rina Rexhepi & Lorent Kelani 2021-2022</p>
  </div>

</footer>