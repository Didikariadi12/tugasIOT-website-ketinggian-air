<?php
	//koneksi ke database
	$konek = mysqli_connect("localhost", "root", "", "dbwaterlevel");
	//baca isi tabel tangki
	$sql = mysqli_query($konek, "SELECT * FROM tb_tangki");
	$data = mysqli_fetch_array($sql);

	$tinggi_max_tangki = 300; //tinggi tangki dalam cm
	$jari2 = 1;				  //jari2 tangki dalam meter
	$phi = 3.14;			  //volume = phi * r^2 * tinggi (tinggi air)
	//ukur tinggi air
	$tinggi_air = $tinggi_max_tangki - $data['tinggi'];	
	//prosentase ketinggian air
	$prosentase_tinggi_air = ($tinggi_air/$tinggi_max_tangki)*100; //hasil persentase
	//hitung volume air
	$volume = $phi * ($jari2 * $jari2) * ($tinggi_air/100); //satuan m3
	//hitung jumlah liter air --> 1 m3 = 1000 L
	$liter = $volume * 1000;

	?>

<!-- pegangan penutup -->
		<!-- <div class="pegangan"></div> -->
		<!-- Penutup tangki -->
		<!-- <div class="penutup"></div> -->
		<!-- Body tangki air -->
		<div class="tangki">
			<div class="air" style="width: 100%; height: <?php echo $prosentase_tinggi_air; ?>%; color: white;">

				<!-- tampilkan informasi tinggi air, volume air, dan liter -->
				<?php
					echo "Tinggi Air : ".($tinggi_air/100)." m"; 
					echo "<br>";
					echo "Volume Air : ".($volume)." m3"; 
					echo "<br>";
					echo "Liter Air : ".number_format($liter). " Liter";

				 ?>
				</div>
			</div>