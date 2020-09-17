<?php 
    include ('db_connect.php');
    if($_POST['daftar']){
	// coba pakai array susah mas hehe.
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $email = $_POST["email"];
        $alamat = $_POST["alamat"];
        $jurusan = $_POST["jurusan"];  
        $ekstensi = array('png','jpg');

        $nama_file = $_FILES['foto']['name'];
        $x = explode('.', $nama_file);
        $ekstens = strtolower(end($x));
        $size = $_FILES['foto']['size'];
        $file_tmp = $_FILES['foto']['tmp_name'];

        if(in_array($ekstens, $ekstensi) === true){
            if($size < 1044070){			
                move_uploaded_file($file_tmp, 'assets/image/'.$nama_file);
                $query = mysqli_query($conn,"INSERT INTO mahasiswa(nama, nim, email, alamat, jurusan, foto) VALUES('$nama', '$nim', '$email', '$alamat', '$jurusan', '$nama_file');");
                if($query){
                    session_start(); 
                    $_SESSION['success'] = '<div class="alert alert-success" role="alert">
                    Data berhasil di daftarkan !
                </div>';
                    header("location:index.php");
                }else{
                    session_start(); 
                    $_SESSION['gagal'] = '<div class="alert alert-warning" role="alert">
                    Pendaftaran Gagal !
                </div>';
                }
            }else{
                echo 'UKURAN FILE TERLALU BESAR';
            }
        }else{
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }

?>