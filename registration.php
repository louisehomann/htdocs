<?php

require_once 'config.php';
 
// Definere variabler
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
$stmt ="";
 
// forarbejder formen, når den bliver submittet
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validere brugernavnet
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare en select statement
        $sql = "SELECT id FROM persons WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // binder variabler, som parameter
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Sæt parameters
            $param_username = trim($_POST["username"]);
            
            // prøver at execute statementet
            if(mysqli_stmt_execute($stmt)){
                /* gemmer resultat */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
             mysqli_stmt_close($stmt);
        }
         
     
       
    }
    
    // Validere password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validere confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Please confirm password.';     
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }
    
    // checker for fejl inden det bliver oplagret i databasen
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare en insert statement
        $sql = "INSERT INTO persons (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // binder variablerne til parameter
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Sæt parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // prøver at execute statementet
            if(mysqli_stmt_execute($stmt)){
                // bliver transporteret til login siden
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
             mysqli_stmt_close($stmt);
        }
         
    
       
    }
    
    // slutter forbindelsen
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Vær sød og fyld formen.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Har du allerede en bruger? <a href="login.php">Login her</a>.</p>
        </form>
    </div>    
</body>
</html>
