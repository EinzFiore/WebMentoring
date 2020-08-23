<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Page</title>
</head>

<body>
    <center>
        <form action="table.php" enctype="multipart/form-data" method="post">
            <table>
                <h1>Form Mahasiswa Baru (HTML)</h1>
                <hr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama" placeholder="Nama Lengkap"></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text" name="nim" id="nim" placeholder="Nomor Induk Mahasiswa"></td>
                </tr>
                <tr>
                    <td>Photo Formal</td>
                    <td>:</td>
                    <td><input type="file" name="photo" id="photo"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name="jk" id="jk" value="Laki-laki">Laki-laki
                        <input type="radio" name="jk" id="jk" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan" id="jurusan">
                            <option>-- Pilih Jurusan --</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Komputer dan Jaringan">Komputer dan Jaringan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat Lengkap</td>
                    <td>:</td>
                    <td><textarea name="alamat" id="alamat" cols="30" rows="5" placeholder="Alamat Anda"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Simpan">
                        <input type="reset" value="Batal">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>