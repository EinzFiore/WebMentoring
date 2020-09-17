<?php
    session_start();
    include('db_connect.php');
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $users = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND pass = '$password'");
    $cek = mysqli_num_rows($users);

        if($cek > 0){
            $row = mysqli_fetch_array($users);
            $_SESSION["role_id"] = $row["id_role"];
            $_SESSION["username"] = $row["username"];
            header('location:dashboard.php');
        } else {
            header("location:login.php");
        }

?>