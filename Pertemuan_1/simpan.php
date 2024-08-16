<?php 
include ('conn.php');
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$kelamin = $_POST["kelamin"];
$jurusan = $_POST["jurusan"];

$query = "INSERT INTO data_mhs VALUES('$nim',null,'$nama','$kelamin','$jurusan','$alamat')";
mysqli_query($conn,$query);
header("Location: index.php");

?>