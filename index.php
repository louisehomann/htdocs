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
    
   </style>   
   
   
  <?php
   // $mysqli = mysqli_connect("localhost", "root", "", "Regnbueslik");
     
?>
</head>
<body>
 
  
    <header style="border: 1px solid #ff0000;">   
        <div class="logo" style="border: 1px solid #00ff00; height: 50px; width: 300px; top: 10px; left: 10px; position: relative;">
            Logo
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
    
        <div style="border: 1px solid #0000ff; height: 170px; width: 200px; top: 50px; left: 30px; position: relative;"> slik produkt<div/>
    
        <div style="border: 1px solid #0000ff; height: 170px; width: 200px; top: -19px; left: 250px; position: relative;"> slik produkt<div/>
    
        <div style="border: 1px solid #0000ff; height: 170px; width: 200px; top: -19px; left: 250px; position: relative;"> slik produkt<div/>
   
    <footer>
       
        
    </footer>
</body>
</html>