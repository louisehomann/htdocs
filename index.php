<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Regnebueslik</title>
  <meta charset="utf-8" />
  <meta name="description" content="Beskrivelse af side" />
  <link rel="shortcut icon" type="image/png" href="favicon.png" style="height: 5px;">
  
  
  <style> 
   
          
      body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
      }
      
      .topnav {
          overflow: hidden;
          background-color: #333; 
     }
     
     /* Tekst på navbar*/
      .topnav a {
          float: left;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
      }
      
           
      /*skygge på navbar*/
      .topnav a:hover {
          background-color: #ddd;
          color: black;
      }
      
      /*farver på navbar*/
      .forside {
          background-color: #ff3333;
          color: white;
      }
      
      .vingummi {
          background-color: #ff9900;
          color: #000000;
      
      }
      
      .lakrids {
          background-color: #33dd33;
          color: #000000;
      }
      
      .chokolade {
          background-color: #3333ff;
          color: #000000;
      }
      
      * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100px;
  text-align: center;
  font-family: sans-serif;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50px;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
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
  .text {font-size: 11px}
  
}

.ramme {
    border: 2px solid red;
    border-radius: 8px;
    border: 10px outset grey;
    text-align: center;
    
}
.kasser {
    border: 2px solid red;
    border-radius: 8px;
    border: 10px outset red;
    text-align: center;
    
}
    
/* Footer*/
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: black;
    color: white;
    text-align: center;
}
   </style>   
   
   
 

<body>
 
    <header>   
        <div class="logo" style="height: 50px; width: 300px; top: 10px; left: 15px; position: relative;">
            <img src="regnbue.png" alt="Logo, en regnbue" style="height: 50px">
        </div>
        <div class="titleBar" style="height: 60px; width: 600px;top: -40px; left: 150px; position: relative;">
            <span style= "color:#FF0000; font-size:50px;">R</span>
            <span style="color:#FF8B00; font-size:50px;">E</span>
            <span style="color:#E7FF00; font-size:50px;">G</span>
            <span style="color:#5CFF00; font-size:50px;">N</span>
            <span style="color:#00FF2E; font-size:50px;">B</span>
            <span style="color:#00FFB9; font-size:50px;">U</span>
            <span style="color:#00B9FF; font-size:50px;">E</span>
            <span style="color:#002EFF; font-size:50px;">S</span>
            <span style="color:#5C00FF; font-size:50px;">L</span>
            <span style="color:#E700FF; font-size:50px;">I</span>
            <span style="color:#FF008B; font-size:50px;">K</span>           
        </div>      
        
 <div style=" height: 60px; width: 300px; left:1280px; top: -20px; position:relative;">
            <a class="login" href="login.php"> Login| </a>
            <a href="Welcome.php"> <?php if ($_SESSION) { echo($_SESSION["username"]);
            }else{
                echo "min bruger";
                }?> </a>
            <a href="cart.php">  Min pose <img src="pose.png" style="height: 50px;"> </a>
          
        </div>
        <div class="topnav">
            <a class="forside" href="index.php">Forside</a>
            <a class="vingummi" href="vingummi.php">Vingummi</a>
            <a class="lakrids" href="lakrids.php">Lakrids</a>
            <a class= "chokolade" href="Chokolade.php">Chockolade</a>

        </div>
    </header>
    
   
<div class="slideshow-container" >

<div class="mySlides fade" >
  <div class="numbertext">1 / 3</div>
  <img src="vingummijordbær.png" style="height: 270px;">
  <div class="text">Jordbær</div>
</div>

<div class="mySlides fade" >
  <div class="numbertext">2 / 3</div>
  <img src="lakridspbie.jpg" style="height: 270px; ">
  <div class="text">Lakridspiber</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="chokorice.png" style="height: 270px;">
  <div class="text">Chokorice</div>
</div>

</div>


<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Skifter billede hver tredje sekund
}
</script>


<br>
<div class="ramme" style="height: 900px; top: 460px; "> Nyheder </div>


 
        <div class="kasser" style=" height: 170px; width: 200px; top: 600px; left: 300px; position: absolute;">
            <p style=""> Lakridskabler </p>
         
             <img src="saltlakrids.png" alt="saltlakrids" height="90" > 
        </div>
    
        <div class="kasser" style="height: 170px; width: 200px; top: 600px; left: 600px; position: absolute;">
          <p style=""> Chokoladesvampe </p>
          <img src="chokoladesvampe.jpg" alt="Chokoladesvampe" height="90">
        </div>
    
        <div class="kasser" style="height: 170px; width: 200px; top: 600px; left: 900px; position: absolute;">
            <p style=""> Surelarver </p>
            <img src="surelarver.png" alt="Sure Larver" height="90">
        </div>
            
        <div class="kasser" style="height: 170px; width: 200px; top: 600px; left: 1200px; position: absolute;">
            <p style=""> Lakridshjul </p>
            <img src="lakridshjul.jpg" alt="Lakridshjul" height="90">
        </div>
             
             <br> <br/>
             
        <div class="kasser" style="height: 170px; width: 200px; top: 900px; left: 300px; position: absolute;">
            <p style=""> Colavingummi </p>
            <img src="colavingummi.jpg" alt="Colavingummi" height="90">
        </div>
    
        <div class="kasser" style="height: 170px; width: 200px; top: 900px; left: 600px; position: absolute;"> 
            <p style=""> Lakridsblomster </p>
            <img src="lakridsblomster.jpg" alt="lakridsblomster" height="90">
        </div>
    
        <div class="kasser" style="height: 170px; width: 200px; top: 900px; left: 900px; position: absolute;">
            <p style=""> Kirsebær </p>
            <img src="kirsebearvingummi.jpg" alt="Kirsebærvingummi" height="90">
        </div>
            
        <div class="kasser" style="height: 170px; width: 200px; top: 900px; left: 1200px; position: absolute;">
            <p style=""> Chokoladekys </p>
            <img src="Chokoladekys.jpg" alt="Chokoladekys" height="90">
        </div>
        

    <footer>
       <div class="footer">
  <p>Footer</p>
</div>
        
    </footer>
</body>
</html>