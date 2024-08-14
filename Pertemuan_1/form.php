<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Input Data</title>
</head>
<body>
    <form action="simpan.php" method="post">
        <table>
            <tr>
                <td>
                    NIM
                </td>
                <td>
                    <input type="text" name="NIM" id="" placeholder="NIM">
                </td>
            </tr>
            <tr>
                <td>
                    Nama
                </td>
                <td>
                    <input type="text" name="nama" id="" placeholder="Nama">
                </td>
            </tr>
            <tr>
                <td>
                    Jenis Kelamin
                </td>
                <td>
                    <input type="radio" name="kelamin" value="L" id="lk">
                    <label for="lk">Laki-laki</label>
                    <input type="radio" name="kelamin" value="P" id="pr">
                    <label for="pr">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>
                    Jurusan
                </td>
                <td>
                    <select name="jurusan" id="">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Kimia">Teknik Kimia</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Alamat
                </td>
                <td>
                    <input type="text" name="alamat" placeholder="Alamat" id="">
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