<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "mydb";

	//Membuat koneksi ke database
	$koneksi= mysqli_connect($host, $username, $password, $database) or die("Koneksi Gagal Dibangun");
	//menghubungkan  koneksi ke database 
	mysqli_select_db($koneksi,$database) or die(mysqli_connect_error("koneksi error"));
 ?>