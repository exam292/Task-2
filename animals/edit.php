<?php
include 'BladeOne/lib/BladeOne.php';
use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';



$conn = mysqli_connect('localhost', 'root', '','website')
				or die ('Connection Failed');
$pet_id = $_GET['pet_id'];
$data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM animals WHERE pet_id='$pet_id'"));
echo mysqli_error($conn);

$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG);

echo $blade->run("edit",array("data"=>$data));