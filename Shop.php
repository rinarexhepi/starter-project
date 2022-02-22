<!DOCTYPE html>
<html lang="en">
  <link href="css/Shop.css" rel="stylesheet" type="text/css">
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

  <!-- <div class="hero-image">
    <div class="hero-text">
      <img src="images/FOTO1.png" alt="">
      
    </div>
  </div> -->
</body>
<main>

<body>
<div class="main">

<h1>The Lucky Shop</h1>
<hr>

<h2>TIME TO SHINE</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('earring')"> Earrings</button>
  <button class="btn" onclick="filterSelection('necklace')"> Necklaces</button>
  <button class="btn" onclick="filterSelection('bracelet')"> Bracelets</button>
  <button class="btn" onclick="filterSelection('ring')"> Rings</button>
</div>


<div class="row">
  <div class="column earring">
    <div class="content">
      <img src="images/earring1.jpg" alt="Mountains" style="width:100%">
      <h4>Coco Earrings</h4>
      <p>$45.99</p>
    </div>
  </div>
  <div class="column earring">
    <div class="content">
    <img src="images/earring2.jpg" alt="Lights" style="width:100%">
      <h4>Riviera Earrings</h4>
      <p>$52.99</p>
    </div>
  </div>
  <div class="column earring">
    <div class="content">
    <img src="images/earring3.jpg" alt="Nature" style="width:100%">
      <h4>Martini Earrings</h4>
      <p>$60.90</p>
    </div>
  </div>
  
  <div class="column earring">
    <div class="content">
      <img src="images/earring4.jpg" alt="Car" style="width:100%">
      <h4>Vnox Earrings</h4>
      <p>$35.89</p>
    </div>
  </div>
  <div class="column necklace">
    <div class="content">
    <img src="images/necklace1.jpg" alt="Car" style="width:100%">
      <h4>Vintage Necklace</h4>
      <p>$56.99</p>
    </div>
  </div>
  <div class="column necklace">
    <div class="content">
    <img src="images/necklace2.jpg" alt="Car" style="width:100%">
      <h4>Priyaasi Necklace</h4>
      <p>$39.99</p>
    </div>
  </div>

  <div class="column necklace">
    <div class="content">
      <img src="images/necklace3.jpg" alt="Car" style="width:100%">
      <h4>Antique Necklace</h4>
      <p>$71.90</p>
    </div>
  </div>
  <div class="column necklace">
    <div class="content">
    <img src="images/necklace4.jpg" alt="Car" style="width:100%">
      <h4>Aaliyah Necklace</h4>
      <p>$51.90</p>
    </div>
  </div>
  <div class="column bracelet">
    <div class="content">
    <img src="images/bracelet1.jpg" alt="Car" style="width:100%">
      <h4>Tribales Bracelet</h4>
      <p>$65.70</p>
    </div>
  </div>
  <div class="column ring">
    <div class="content">
    <img src="images/ring1.jpg" alt="Car" style="width:100%">
      <h4>Leiah Ring</h4>
      <p>$67.99</p>
    </div>
  </div>
  <div class="column ring">
    <div class="content">
    <img src="images/ring2.jpg" alt="Car" style="width:100%">
      <h4>Linia Ring</h4>
      <p>$78.99</p>
    </div>
  </div>
  <div class="column bracelet">
    <div class="content">
    <img src="images/bracelet2.jpg" alt="Car" style="width:100%">
      <h4>Glenan Bracelet</h4>
      <p>$45.90</p>
    </div>
  </div>
  <div class="column bracelet">
    <div class="content">
    <img src="images/bracelet3.jpg" alt="Car" style="width:100%">
      <h4>Tennis Deluxe Bracelet</h4>
      <p>$53.90</p>
    </div>
  </div>
  <div class="column ring">
    <div class="content">
    <img src="images/ring4.jpg" alt="Car" style="width:100%">
      <h4>Osborne Reef Ring</h4>
      <p>$55.60</p>
    </div>
  </div>
  <div class="column ring">
    <div class="content">
    <img src="images/ring3.jpg" alt="Car" style="width:100%">
      <h4>Bloom Ring</h4>
      <p>$57.80</p>
    </div>
  </div>
  <div class="column bracelet">
    <div class="content">
    <img src="images/bracelet4.jpg" alt="Car" style="width:100%">
      <h4>Yveline Bracelet</h4>
      <p>$32.80</p>
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