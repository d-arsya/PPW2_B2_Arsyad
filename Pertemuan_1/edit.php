<?php 
include ('conn.php');
$id = $_GET["id"];
$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM data_mhs WHERE id_mhs='$id'"));
function isGender($value){
    global $data;
    return $value==$data["jenis_kelamin"]?'checked':"";
}
function isProgram($value){
    global $data;
    return $value==$data["jurusan"]?'selected':"";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Input Data</title>
</head>
<body>
    <form action="update.php?id=<?=$_GET['id']?>" method="post">
        <table>
            <tr>
                <td>
                    NIM
                </td>
                <td>
                    <input type="text" name="nim" id="" value="<?=$data['nim']?>" placeholder="NIM">
                </td>
            </tr>
            <tr>
                <td>
                    Nama
                </td>
                <td>
                    <input type="text" name="nama" value="<?=$data['nama']?>" id="" placeholder="Nama">
                </td>
            </tr>
            <tr>
                <td>
                    Jenis Kelamin
                </td>
                <td>
                    <input type="radio" <?= isGender("L")?> name="kelamin" value="L" id="lk">
                    <label for="lk">Laki-laki</label>
                    <input type="radio" <?= isGender("P")?> name="kelamin" value="P" id="pr">
                    <label for="pr">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>
                    Jurusan
                </td>
                <td>
                    <select name="jurusan" id="">
                        <option <?= isProgram("Teknik Informatika")?> value="Teknik Informatika">Teknik Informatika</option>
                        <option <?= isProgram("Teknik Mesin")?> value="Teknik Mesin">Teknik Mesin</option>
                        <option <?= isProgram("Teknik Kimia")?> value="Teknik Kimia">Teknik Kimia</option>
                        <option <?= isProgram("Sistem Informasi")?> value="Teknik Kimia">Sistem Informasi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Alamat
                </td>
                <td>
                    <input type="text" name="alamat" value="<?=$data['alamat']?>" placeholder="Alamat" id="">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>