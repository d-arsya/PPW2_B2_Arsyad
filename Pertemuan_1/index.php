<?php 
  include("conn.php");
  $data = mysqli_query($conn,"SELECT * FROM data_mhs");
  $no = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table,td,th{
      border: 1px solid black;
      padding: 5px;
      border-collapse: collapse;
    }
  </style>
</head>
<body>
  <a href="form.php">Tambah</a>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Jurusan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php

foreach($data as $mhs){
  echo "
    <tr>
      <td>".$no."</td>
      <td>".$mhs["nim"]."</td>
      <td>".$mhs["nama"]."</td>
      <td>".$mhs["jenis_kelamin"]."</td>
      <td>".$mhs["jurusan"]."</td>
      <td>
        <a href='edit.php?id=".$mhs['id_mhs']."'>Edit</a>
        <a href='delete.php?id=".$mhs['id_mhs']."'>Delete</a>
      </td>
    </tr>
  ";
  $no++;
}

?>
    </tbody>
  </table>
</body>
</html>

