<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table CSS</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        table {
            margin: 2px auto;
            padding: 2px;
            border-collapse: collapse;
        }

        thead {
            background: #343A40;
            color: white;
            font-weight: bold;
        }

        tbody {
            background: #3E444A;
            color: white;
        }

        td {
            text-align: left;
            padding: 15px;
            padding-right: 100px;
            border-bottom: 1px solid #4f5861;
        }

        td:first-child {
            font-weight: bold;
        }

        img{
            height: 80px;
            width: 8d0px;
        }
    </style>
</head>

<?php
// ambil data file pada variabel $_FILES
$file_photo = $_FILES['photo']['name'];
$tempName = $_FILES['photo']['tmp_name'];

// atur directory file upload
$dirPhoto = "img/";

// pindah file dari server ke directory yang ditentukan
$dirPhoto = move_uploaded_file($tempName, $dirPhoto.$file_photo);

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jk = $_POST['jk'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
?>

<body>
    <table>
        <h1 align="center">Table (CSS)</h1>
        <thead>
            <td>#NIM</td>
            <td>Photo</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Jurusan</td>
            <td>Alamat</td>
        </thead>
        <tbody>
            <tr>
                <td><?= $nim ?></td>
                <td><img src="img/<?=$file_photo ?>" ></td>
                <td><?= $nama ?></td>
                <td><?= $jk ?></td>
                <td><?= $jurusan ?></td>
                <td><?= $alamat ?></td>
            </tr>
        </tbody>
    </table>

</body>

</html>