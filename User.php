
<?php
   require_once 'DB.php';
    
   // Create table
   $sql = "CREATE TABLE persons(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP)";
   if (mysqli_query($mysqli, $sql))
       echo "Created table<br>";
   else
       echo "Failed to create<br>";
   ?>
