<?php  
include 'koneksi.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

	if ($username&&$password) {
		$hashPassword = md5($password);
		$result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username' AND password = '$hashPassword'");
		if($result){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $row['username'];
			header('location: dashboard/dataBarang.php');
		}
	}
	else{
		 echo "<script>alert('Anda gagal login');window.location='login.php'</script>";
		//header("location:login.php?pesan=Anda gagal login");
	}
?>
