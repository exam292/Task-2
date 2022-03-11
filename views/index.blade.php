@extends('app')

@section('content')

<?php
// Initialize the session
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: homepage.php");
    exit;
}
?>


    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1><p>
    <hr class="style1">
    <div style="padding: 5px;">
        <a href="reset-password.php" class="booton btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="booton btn btn-danger ml-3">Sign Out of Your Account</a>
    </div>
    </p>


@endsection
@section('content2')
<h1>GibJohn Tutoring</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
@endsection
@section('content3')
<h1>Placeholder</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
@endsection