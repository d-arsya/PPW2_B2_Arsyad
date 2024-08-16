<?php 
include ('conn.php');
$id = $_GET["id"];
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$kelamin = $_POST["kelamin"];
$jurusan = $_POST["jurusan"];

$query = "UPDATE data_mhs SET nim='$nim',nama='$nama',jenis_kelamin='$kelamin',jurusan='$jurusan',alamat='$alamat' WHERE id_mhs='$id'";
mysqli_query($conn,$query);
header("Location: index.php");

?>