<?php  
include "koneksi.php";
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

    if($username && $password){
        $hashPassword = md5($password);
        $result = mysqli_query($koneksi, "INSERT INTO users (username, password) VALUES ('$username', '$hashPassword')");
        if($result){
            echo "<script>alert('Berhasil! Silahkan Login');window.location='login.php'</script>";
        } else {
            echo "<script>alert('Anda gagal Didaftarkan! coba lagi');window.location='daftar.php'</script>";
        }
    } else {
        echo "<script>alert('Anda gagal Didaftarkan! coba lagi');window.location='daftar.php'</script>";
    }
?>
