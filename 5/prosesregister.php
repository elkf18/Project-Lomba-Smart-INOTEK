<?php
error_reporting(0);
include 'koneksi.php';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	$query = "INSERT INTO tbregister VALUES ('$username', '$email', '$password')";
	$result = mysqli_query($koneksi, $query);

	if (!$result) {
		die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
		" - ".mysqli_error($koneksi));
	} else {
		echo "<script>alert('Registration Completed');
			window.location.href='dashboard2.php'</script>";
		}
	}

?>