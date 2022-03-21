@extends('app')

@section('content')
<div class="mx-auto row" style="width: 200px;">

<form action="add-script.php" method="post">
	
    <p> Enter Pet Name: <input type="text" name="name" /> </p>
    <p> Enter Pet Age: <input type="text" name="age" /> </p>
    <p> Enter Pet Type: <input type="text" name="type" /> </p> 
    <input class="btn btn-primary" type="submit" value="Add"/>

</form>


@endsection