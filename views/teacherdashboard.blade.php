<!-- Teacher Dashboard -->

@extends('app')

@section('content')

<?php
// Initialize the session
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: teacherstudentsignup.php"); //If the user isn't logged in they're redirected to the login page
    exit;
}
?>
    
    <div class="bg-light shadow rounded px-3  container-fluid">
    	<h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1><p>
    	<hr class="style1">
    <div style="padding: 5px;">

    <a href="reset-password.php" class="booton btn btn-warning">Account 
    	<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
        	<path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
    	</svg>  
	</a>

	<hr class="style1">
    <h2>GibJohn Tutoring</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>

</div>
</p>
</div>
@endsection

@section('Leaderboard')

	<div class="bg-light rounded shadow container-fluid p-3">
    	<h2>Your Classes</h2>
    	<hr class="style1">

	<?php 

		$conn = mysqli_connect('localhost', 'root', '','website')
				or die ('Connection Failed');
		
		$sql = "SELECT DISTINCT courses.name AS Course, courses.code AS Code, teachers.username AS Teacher_name
				FROM classes
				INNER JOIN courses ON classes.fk_course=courses.id
				INNER JOIN teachers ON classes.fk_teacher=teachers.id
				WHERE teachers.id='{$_SESSION['id']}'";
		
		$query = mysqli_query($conn, $sql);
		echo "<table class='table'>
				<tr>
					<th>Course</th>
					<th>Code</th>
					<th></th>
				</tr>";
		
		while ($row = mysqli_fetch_array($query))
		{
			echo"<tr>
                    <td>" . $row['Course'] . "</td>
					<td>" . $row['Code'] . "</td>
					<td> <A class='btn btn-primary disabled' href='edit.php?course=".$row['Course']." '> Manage </a> </td>
				</tr>";
			
		}
		echo "
		</table>";
		
		
		echo mysqli_error($conn);
        ?>

		<!-- Button trigger modal -->
<button type="button" class="btn btn-primary disabled" data-toggle="modal" data-target="#exampleModalLong">
	Create Classes
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  
		


		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div>
	  </div>
	</div>
  </div>
</div>
@endsection
@section('Tasks')
<div class="bg-light rounded shadow container-fluid p-3">
<h2>Your Students</h2>
<hr class="style1">

<?php 

		$conn = mysqli_connect('localhost', 'root', '','website')
				or die ('Connection Failed');
		
		$sql = "SELECT students.username AS Student_name, courses.name AS Course, teachers.username AS Teacher_name
FROM classes
INNER JOIN students ON classes.fk_student=students.id
INNER JOIN courses ON classes.fk_course=courses.id
INNER JOIN teachers ON classes.fk_teacher=teachers.id
WHERE teachers.id='{$_SESSION['id']}'";
		
		$query = mysqli_query($conn, $sql);
		echo "<table class='table'>
				<tr>
					<th>Student Name</th>
					<th>Course</th>
					<th>Teacher</th>
					<th></th>
				</tr>";
		
		while ($row = mysqli_fetch_array($query))
		{
			echo"<tr>
					<td>" . $row['Student_name'] . "</td>
                    <td>" . $row['Course'] . "</td>
					<td>" . $row['Teacher_name'] . "</td>
					<td> <A class='btn btn-primary disabled' href='edit.php?course=".$row['Course']." '> Manage </a> </td>
				</tr>";
			
		}
		echo "
		</table>";
		
		
		echo mysqli_error($conn);
        ?>
</div>
@endsection

@section('Courses')

@endsection

<!-- Teacher Dashboard -->