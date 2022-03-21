<?php
include_once "models/pets.php";
include 'BladeOne/lib/BladeOne.php';
use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';

// model
$conn = mysqli_connect('localhost', 'root', '','website') or die ('Connection Failed');
pet_delete($conn, $conn->real_escape_string($_GET['pet_id']));
		
// view
$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG);
echo $blade->run("delete",array("msg"=>'You have successfully deleted a pets record.'));