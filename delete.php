<?php
//include database connection file
include_once("koneksi.php");

//GET id from URL to delete that user
$nim=$_GET['nim'];

//Delete user row from table based on given id
$result = mysqli_query($con,"DELETE  * FROM mahasiswa WHERE nim='$nim'");

//after delete redirect to home , so that latest user list will be displayed
header("Location:index.php");
?>

