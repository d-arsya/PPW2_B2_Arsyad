<?php 
include('conn.php');
$id = $_GET["id"];
$query = "DELETE FROM data_mhs WHERE id_mhs=$id";
mysqli_query($conn,$query);
header("Location: index.php");
?>