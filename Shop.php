<!DOCTYPE html>
<html lang="en">
  <link href="index.css" rel="stylesheet" type="text/css">
<head>
<title>Our products</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">



</head>
<body>

  <link rel="stylesheet" href="file:///C:\xampp\htdocs\RinaRexhepi-Projekti">
  
  <div class="navbar">
    <a href="file:///C:\xampp\htdocs\RinaRexhepi-Projekti\index.html#">Home</a>
        <a href="file:///C:\xampp\htdocs\RinaRexhepi-Projekti\Contact.html">Contact</a>
        <a href="file:///C:\xampp\htdocs\RinaRexhepi-Projekti\Shop.html">Shop</a>
  </div>

  <div class="hero-image">
    <div class="hero-text">
      <img src="images/FOTO1.png" alt="">
      
    </div>
  </div>
</body>
<main>

  
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="Shop.css" rel="stylesheet" type="text/css">

</head>
<body>


<div class="main">

<h1>MYLOGO.COM</h1>
<hr>

<h2>PORTFOLIO</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('nature')"> Nature</button>
  <button class="btn" onclick="filterSelection('cars')"> Cars</button>
  <button class="btn" onclick="filterSelection('people')"> People</button>
</div>


<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="images/mountains.jpg" alt="Mountains" style="width:100%">
      <h4>Mountains</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="images/lights.jpg" alt="Lights" style="width:100%">
      <h4>Product1</h4>
      <p>Color Pricep>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="images/nature.jpg" alt="Nature" style="width:100%">
      <h4>product2</h4>
      <p>price color</p>
    </div>
  </div>
  
  <div class="column cars">
    <div class="content">
      <img src="images/cars1.jpg" alt="Car" style="width:100%">
      <h4>product3</h4>
      <p>color price.</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="images/cars2.jpg" alt="Car" style="width:100%">
      <h4>Fast</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="images/cars3.jpg" alt="Car" style="width:100%">
      <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column people">
    <div class="content">
      <img src="images/people1.jpg" alt="Car" style="width:100%">
      <h4>Girl</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="images/people2.jpg" alt="Car" style="width:100%">
      <h4>Man</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="images/people3.jpg" alt="Car" style="width:100%">
      <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

</div>


</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>


<footer>
  
  <div class="footer">
    <p>All rights reserved by Rina Rexhepi & Lorent Kelani 2021-2022</p>
  </div>

</footer>

</main>
</html>