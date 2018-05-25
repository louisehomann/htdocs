<?php
// starter session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// ødelægger session'en
session_destroy();
 
// bliver transporteret til loginsiden
header("location: index.php");
exit;
?>
