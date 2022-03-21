<?php

function pet_delete($conn, $id) {
    $sql = "DELETE FROM animals WHERE pet_id='$id'";
	mysqli_query($conn, $sql);
	echo mysqli_error($conn);
}