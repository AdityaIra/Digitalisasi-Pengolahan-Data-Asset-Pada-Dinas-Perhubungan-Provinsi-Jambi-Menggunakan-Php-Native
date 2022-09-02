<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="1"){
 
		// buat session login dan username
		$_SESSION['username'] = $data['username'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['level'] = "1";
		// alihkan ke halaman dashboard admin
		$tujuan = 'halaman_admin.php?adminpage=dashboard';
		header("location:$tujuan");
 
	// cek jika user login sebagai member
	}else if($data['level']=="2"){
		// buat session login dan username
		$_SESSION['username'] = $data['username'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['level'] = "2";
		// alihkan ke halaman dashboard member
		$tujuan = 'halaman_member.php?memberpage=dashboard';
		header("location:$tujuan");
	}else if($data['level']=="3"){
		// buat session login dan username
		$_SESSION['username'] = $data['username'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['level'] = "3";
		// alihkan ke halaman dashboard member
		$tujuan = 'halaman_pimpinan.php?pimpinanpage=dashboard';
		header("location:$tujuan");
	}else{
 
		// alihkan ke halaman login kembali
		$tujuan = 'index.php?pesan=gagal';
		header("location:$tujuan");
	}	
}else{
		$tujuan = 'index.php?pesan=gagal';
		header("location:$tujuan");
}
 
?>