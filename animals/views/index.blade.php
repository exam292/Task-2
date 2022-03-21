@extends('app')

@section('content')

<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] ==false){
    header("location: welcome.php");
    exit;
}
		$conn = mysqli_connect('localhost', 'root', '','website')
				or die ('Connection Failed');
		
		$sql = 'SELECT * FROM animals';
		
		$query = mysqli_query($conn, $sql);
		echo "<table class='table'>
				<tr>
					<th>#</th>
					<th>Pet Name</th>
					<th>Pet Age</th>
					<th>Pet Type</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>";
		
		while ($row = mysqli_fetch_array($query))
		{
			echo"<tr>
					<td>" . $row['pet_id'] . "</td>
					<td>" . $row['pet_name'] . "</td>
					<td>" . $row['pet_age'] . "</td>
					<td>" . $row['pet_type'] . "</td>
					<td> <A class='btn btn-primary' href='edit.php?pet_id=".$row['pet_id']." '> Edit </a> </td>
					<td> <A class='btn btn-danger' href='delete.php?pet_id=".$row['pet_id']." '> Delete </a> </td>
				</tr>";
			
		}
		echo "
		</table>
		<A class='btn btn-success' style='width: auto;' href='add.php'> Add </a>
		<A class='btn btn-warning' style='width: auto;' href='welcome.php'> Home </a>";
		
		
		echo mysqli_error($conn);
        ?>

@endsection
