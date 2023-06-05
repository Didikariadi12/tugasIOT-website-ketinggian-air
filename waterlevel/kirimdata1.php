<?php 
	
	//koneksi ke database
	$konek = mysqli_connect("localhost", "root", "", "dbwaterlevel");

	//baca nilai tinggi yang dikirim oleh nodemcu
	$tinggi = $_GET['tinggi'];

	//simpan / update ke tabel tb_tangki field tinggi
	mysqli_query($konek, "UPDATE tb_tangki1 SET tinggi='$tinggi'")

 ?>