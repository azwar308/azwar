<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "phpfundamental";
	
	$connect = mysqli_connect($host, $username, $password, $database);
	
	if( !$connect){
		die("Gagal terhubung dengan database: " .mysqli_connect_error());
	}	else {
		echo "koneksi berhasil";
	}
?>