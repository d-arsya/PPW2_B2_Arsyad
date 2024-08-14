<?php
include("conn.php");
$data = mysqli_query($conn,"SELECT * FROM data_mhs");
$no = 1;
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
