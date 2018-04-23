<!DOCTYPE html>
<html>
<head>
  <title>Regnebueslik</title>
  <meta charset="utf-8" />
  <meta name="description" content="Beskrivelse af side" />
<<<<<<< HEAD
  
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
    $mysqli = mysqli_connect("localhost", "root", "", "Regnbueslik");
     
?>
</head>
<body>
    
     <header>
   <h1>Regnbueslik</h1>
      
    <div class="topnav">
  <a class="forside" href="#forside">Forside</a>
  <a class="vingummi" href="#vingummi">Vingummi</a>
  <a class="lakrids" href="#lakrids">Lakrids</a>
  <a class= "chokolade" href="#chokolade">Chockolade</a>
 
 
  
</div>

  </header>
</body>
</html>