<?php  

session_start();
$connect = mysqli_connect("localhost", "root", "", "regnbueslik");

        $sql = "INSERT INTO ordre (username, items, total) VALUES (?, ?,?)";
         
        if($stmt = mysqli_prepare($connect, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_items, $param_total);
            
            // Set parameters
            $param_username = ($_SESSION["username"]);
            $param_items = number_format($values["item_quantity"]);
            $param_total = $total;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
             
               header("location: index.php");
                echo '<script>alert("Ordre placeret")</script>';
            } else{
                echo "Something went wrong. Please try again later.";
            }
             mysqli_stmt_close($stmt);
        }
	?>	