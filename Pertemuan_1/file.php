<?php  
$file = fopen('kata.txt','r');
echo fgets($file)."<br><br>";
fclose($file);

$data = fopen('data.txt','r');
if(!$data){
  echo "File gagal dibuka";
  exit;
}
while(!feof($data)){
  $teks = fgets($data,50);
  echo "$teks <br>";
}
fclose($data);
?>