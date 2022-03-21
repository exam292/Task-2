@extends('app')

@section('content')
<div class="mx-auto row" style="width: 200px;">
<?php
		$conn = mysqli_connect('localhost', 'root', '','website')
				or die ('Connection Failed');
		
		$pet_name = strip_tags($_POST['name']);
		$pet_age = strip_tags($_POST['age']);
		$pet_type = strip_tags($_POST['type']);
		
		$query = "INSERT INTO animals (pet_name, pet_age, pet_type)
					VALUES('$pet_name', '$pet_age', '$pet_type')";
					
		if(mysqli_query($conn, $query)) {
			echo 'You have successfully added ' . $pet_name . ' to the database.';
			
		} else {
			echo ' There was an error adding the record ';
			echo mysqli_error($conn);
		}
		
	?>
<A href='index.php'> Home </a>
    </div>

@endsection