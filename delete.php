<?php
// include database connection file
include_once("koneksi.php");

// Get id from URL to delete that user
$id_video = $_GET['id_video'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM video WHERE id_video=$id_video");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>