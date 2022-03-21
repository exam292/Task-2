@extends('app')

@section('content')
<?php
		$conn = mysqli_connect('localhost', 'root', '','website')
				or die ('Connection Failed');
		
		$pet_id = strip_tags($_POST['id']);
		$new_name = strip_tags($_POST['name']);
		$new_age = strip_tags($_POST['age']);
		$new_type = strip_tags($_POST['type']);
		
		$query = "UPDATE animals
					SET pet_id='$pet_id', pet_name='$new_name', pet_age='$new_age', pet_type='$new_type'
					WHERE pet_id='$pet_id' ";
		
		mysqli_query($conn, $query);
		
		echo mysqli_error($conn);
		
		echo "You have edited a pets record.";
	?>
	<A href='index.php'> Home </a>
    @endsection