@extends('plainlayout')

@section('gibjohndesc')

<?php
// Initialize the session
session_start();
?>
<div class="container-fluid px-4 text-center">
                <h1 style="padding-top: 150px;">Welcome to GibJohn Tutoring!</h1>
                <p class="lead">Inspiring Education</p>
                <a class="btn btn-lg btn-light" href="index.php">Start learning!</a>
            </div>
</div>
@endsection
