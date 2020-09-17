<?php 
 $host = "localhost";
 $user = "root";
 $pass = "";
 $database = "week6";

 $conn = mysqli_connect($host, $user, $pass, $database);
 if(!$conn) die("Koneksi gagal! : " . mysqli_connect_error());
?>