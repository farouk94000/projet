<?php include("includes/header.php") ?>

<!DOCTYPE html>
<html>

<head>
<title>Top</title>
				<link  href="css/stylefoodx.css" rel="stylesheet"   type="text/css" />
				<link  href="css/stylemodal.css" rel="stylesheet"   type="text/css" />
				<meta http="Content-Type" content="text/html; charset="utf-8" />    
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #FCBB04;
  background-color: black;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  font-weight: bolder;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #FCBB04;
  background-color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>

<body>

<h1>Top adresses</h1>
<h3>Découvrez une séléction régulière des meilleures adresses par la rédaction !</h3>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="http://s3-eu-central-1.amazonaws.com/tablemi.images/okito_588/gallery/dfa462f4-0912-4633-81b8-fbb5bc15306f.jpg" style="width:100%">
  <div class="text"><h3>Okito</h3></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="http://www.freeresto.com/restos/pics/1201_2.jpg?1560233794" style="width:100%">
  <div class="text">La Fabrique Burger Gourmet</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="https://www.restofolio.fr/media/W1siZiIsIjIwMTgvMDEvMTYvNHU2M2x5NWd5bl8yNjkwMzY1Ml8xNjg0NzQwODc0OTA2MDc5XzE5NTE2NjMwMDM1MTMwOTg1NDBfbi5qcGciXSxbInAiLCJlbmNvZGUiLCJqcGciLCItcXVhbGl0eSA0MCJdLFsicCIsInRodW1iIiwiMTI0MHgiXV0/26903652_1684740874906079_1951663003513098540_n.jpg?sha=b4f6d985a76e9f29" style="width:100%">
  <div class="text">Good Thaï</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="http://www.guide-restaurants-et-voyages-du-monde.com/images/restaurants/00110-lejanissaire/lejanissairebig.jpg" style="width:100%">
  <div class="text">Le Janissaire</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="https://f.roocdn.com/images/menus/136807/header-image.jpg?width=1200&height=630&auto=webp&format=jpg&fit=crop&v=1556188814" style="width:100%">
  <div class="text">Makido</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="http://www.shisoburger.fr/wp-content/uploads/2017/01/shisomenu.jpg" style="width:100%">
  <div class="text">Shiso Burger</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<?php include("includes/footer.php") ?>
</body>