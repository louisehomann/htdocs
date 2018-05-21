                 <!DOCTYPE html>
<html>
<head>
  <title>Regnebueslik</title>
  <meta charset="utf-8" />
  <meta name="description" content="Beskrivelse af side" />
 
  
  <style> 
     .logo {
  
          overflow: hidden;
          background-color: #dddddd;
          
     }
          
     .titleBar {
          overflow: hidden;
          background-color: #dddddd;  
          }
          
     
      
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
          background-color: #33dd33;
          color: #000000;
      
      }
      
      .lakrids {
          background-color: #33dd33;
          color: #000000;
      }
      
      .chokolade {
          background-color: #33dd33;
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
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100px;
  text-align: center;
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
    
   </style>   
   
   
  <?php
   // $mysqli = mysqli_connect("localhost", "root", "", "Regnbueslik");
     
?>
</head>
<body>
 
  
    <header style="border: 1px solid #ff0000;">   
        <div class="logo" style="border: 1px solid #00ff00; height: 50px; width: 300px; top: 10px; left: 10px; position: relative;">
            <img src="logo.png" alt="Logo, regnbue med tekst" width="100">
        </div>
        <div class="titleBar" style="border: 1px solid #0000ff; height: 50px; width: 600px;top: -42px; left: 330px; position: relative;">
            <h2>Regnbueslik!</h2>            
        </div>      
        
        
        <div>
            <a class="login" href="config.php"> Login| </a>
            <a> Min bruger| </a>
            <a> Min pose </a>
            
        </div>
        <div class="topnav" style="border: 1px solid #000000;">
            <a class="forside" href="#forside">Forside</a>
            <a class="vingummi" href="#vingummi">Vingummi</a>
            <a class="lakrids" href="#lakrids">Lakrids</a>
            <a class= "chokolade" href="#chokolade">Chockolade</a>
        </div>
    </header>
    
   
<div class="slideshow-container" >

<div class="mySlides fade" >
  <div class="numbertext">1 / 3</div>
  <img src="lakridsblomster.jpg" style="width:250px">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade" >
  <div class="numbertext">2 / 3</div>
  <img src="lakridspbie.jpg" style="width:250px">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="lakridssutter.jpg" style="width:250px">
  <div class="text">Caption Three</div>
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
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>


<br>
    
        <div style="border: 5px solid #0000ff; height: 170px; width: 200px; top: 460px; left: 300px; position: absolute;">
            Lakridskabler
            <br> 
            <p style= "position:absolute; top: 10px; left:50px" </p> <img src="saltlakrids.png" alt="saltlakrids" width="100" > 
        </div>
    
        <div style="border: 5px solid #0000ff; height: 170px; width: 200px; top: 460px; left: 600px; position: absolute;">
            Lakridsblomster
            <img src="lakridsblomster.jpg" alt="lakridsblomster" width="100">
        </div>
    
        <div style="border: 5px solid #0000ff; height: 170px; width: 200px; top: 460px; left: 900px; position: absolute;"> slik produkt</div>
            
        <div style="border: 5px solid #0000ff; height: 170px; width: 200px; top: 460px; left: 1200px; position: absolute;"> slik produkt</div>
             
             <br> <br/>
             
        <div style="border: 5px solid #0000ff; height: 170px; width: 200px; top: 690px; left: 300px; position: absolute;"> slik produkt</div>
    
        <div style="border: 5px solid #0000ff; height: 170px; width: 200px; top: 690px; left: 600px; position: absolute;"> slik produkt</div>
    
        <div style="border: 5px solid #0000ff; height: 170px; width: 200px; top: 690px; left: 900px; position: absolute;"> slik produkt</div>
            
        <div style="border: 5px solid #0000ff; height: 170px; width: 200px; top: 690px; left: 1200px; position: absolute;"> slik produkt</div>
   
    <footer>
       
        
    </footer>
</body>
</html>