<?php

$file = fopen('kata.txt','r');
echo fgetss($file);
fclose($file);

$data = fopen('data.txt','r');
if(1data){
  echo "File gagal dibuka";
  exit;
}
while(!feof($data)){
  $teks = fgets($data,50);
  echo "$teks <br>"
}
fclose($data);

CREATE TABLE data_mhs(
  nim VARCHAR(13) NOT NULL,
  id_mhs int(110 NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nama VARCHAR(40) NOT NULL,
  jenis_kelamin enum("P","L") NOT NULL,
  jurusan VARCHAR(30) NOT NULL,
  alamat TEXT NOT NULL
);
INSERT INTO data_mhs VALUES('TI102132',1,'Komang','L','Sistem Informasi','Depok');

$db_host = "localhost";
$db_name = "db_mhs"
$db_username = "root";
$db_password = "";
$db_port = 3306;
$conn = mysqli_query($db_host,$db_username,$db_password,$db_name,$db_port);

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
    </tr>
  ";
  $no++;
}


?>