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
   
   
  <?php
   // $mysqli = mysqli_connect("localhost", "root", "", "Regnbueslik");
     
?>

<body>
 
    <header>   
        <div class="logo" style="height: 50px; width: 300px; top: 10px; left: 15px; position: relative;">
            <img src="regnbue.png" alt="Logo, en regnbue" style="height: 50px;"> <a href="index.php"></a> 
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
        

        <div style=" height: 60px; width: 300px; left:1280px; top: -20px; position:relative; border: 1px solid #0000ff;">
            <a class="login" href="login.php"> Login| </a>
            <a href="Welcome.php"> <?php if ($_SESSION) { echo($_SESSION["username"]);
            }else{
                echo "min bruger";
                }?> </a>
            <a href="cart.php">  Min pose <img src="pose.png" style="height: 50px;"> </a>
          
        </div>
        <div class="topnav">
            <a class="forside" href="index.php">Forside</a>
            <a class="vingummi" href="Vingummi.php">Vingummi</a>
            <a class="lakrids" href="Lakrids.php">Lakrids</a>
            <a class= "chokolade" href="Chokolade.php">Chockolade</a>

        </div>
    </header>

<br>
<div style="border: 5px solid #0000ff; height: 900px; top: 460px; "  </div>

<br> </br>

 
        <div style="border: 5px solid #0000ff; height: 170px; width: 200px; top: 600px; left: 300px; position: absolute;">
            Lakridskabler
            <br> 
            <p style= "position:absolute; top: 10px; left:50px" </p> <img src="saltlakrids.png" alt="saltlakrids" width="100" > 
        </div>
    
        <div style="border: 5px solid #0000ff; height: 170px; width: 200px; top: 600px; left: 600px; position: absolute;">
            Lakridsblomster
            <img src="lakridsblomster.jpg" alt="lakridsblomster" width="100">
        </div>
    
        <div style="border: 5px solid #0000ff; height: 170px; width: 200px; top: 600px; left: 900px; position: absolute;"> slik produkt</div>
            
        <div style="border: 5px solid #0000ff; height: 170px; width: 200px; top: 600px; left: 1200px; position: absolute;"> slik produkt</div>
             
             <br> <br/>
             
        <div style="border: 5px solid #0000ff; height: 170px; width: 200px; top: 900px; left: 300px; position: absolute;"> slik produkt</div>
    
        <div style="border: 5px solid #0000ff; height: 170px; width: 200px; top: 900px; left: 600px; position: absolute;"> slik produkt</div>
    
        <div style="border: 5px solid #0000ff; height: 170px; width: 200px; top: 900px; left: 900px; position: absolute;"> slik produkt</div>
            
        <div style="border: 5px solid #0000ff; height: 170px; width: 200px; top: 900px; left: 1200px; position: absolute;"> slik produkt</div>
        

    <footer>
       <div class="footer">
  <p>Footer</p>
</div>
        
    </footer>
</body>
</html>