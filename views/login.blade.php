<!-- Login Page -->

@extends('doublelayout')

@section('content')

<?php

session_start(); //Login Script

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){ //Checking if the user is already logged in
    header("location: index.php"); //if true, the user gets redirected to index.php
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){

        // Prepare a select statement
        $sql = "SELECT id, username, password FROM students WHERE username = ?"; //Getting the Password and ID from the students table
        
        if($stmt = mysqli_prepare($link, $sql)){

            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){  
                    // Bind result variables                  
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                             // Store data in session variables
                            $_SESSION["student"] = true;
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            header("location: index.php");
                        } else{
                            // Password is not valid
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            if(!empty($login_err)){
            echo '<div class="w-40 h-25 mx-auto alert alert-danger">' . $login_err . '</div>';
        }        // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
        <span class="invalid-feedback"><?php echo $username_err; ?></span>
    </div>    

    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
        <span class="invalid-feedback"><?php echo $password_err; ?></span>
    </div>

    <div class="form-group" style="padding-top: 10px;">
        <input type="submit" class="btn btn-primary" value="Login">
    </div>

    <div>
        <hr class="style1">
    </div>

    <p>Don't have an account? <a href="teacherstudentsignup.php">Sign up now</a>.</p>
</form>



@endsection

@section('title')

    <h1>Student Login:</h1>

@endsection

    <!-- Login Page -->