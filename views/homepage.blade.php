@extends('app')

@section('content')

<?php
// Initialize the session
session_start();
?>

<div class="container">
  <div class="row justify-content-start">
    <div class="col-sm">
      One of three columns
    </div>
  </div>
  <div class="row justify-content-end">
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div>


@endsection