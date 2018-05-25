<?php
/* Database værdier */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'Regnbueslik');
 
/* Prøver at forbinde til databasen */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Tjekker forbindelsen
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>