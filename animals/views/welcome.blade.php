@extends('app')

@section('content')

<?php
// Initialize the session
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1><p>
    <hr class="style1">
    <div style="padding: 5px;">
        <a href="reset-password.php" class="booton btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="booton btn btn-danger ml-3">Sign Out of Your Account</a>
        <a href="index.php" class="booton btn btn-primary ml-3">Pet Records</a>
    </div>
    </p>


@endsection