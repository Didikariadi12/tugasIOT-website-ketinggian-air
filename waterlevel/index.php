<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<style type="text/css">
		.tangki{
			border-style: solid ;
			width: 300px;
			height: 300px;
			left: 50%;
			transform: translate(-50%);
			position: sticky;
			border-bottom-left-radius: 20px ;
			border-bottom-right-radius: 20px ;
		}
		.air{
			left: 50%;
			bottom: 0px;
			transform: translate(-50%);
			position: absolute;
			border-bottom-left-radius: 20px ;
			border-bottom-right-radius: 20px ;
			background-color: blue;
		}
		.penutup{
			border-style: solid ;
			width: 300px;
			height: 40px;
			left: 50%;
			transform: translate(-50%);
			position: sticky;
			border-top-left-radius: 20px ;
			border-top-right-radius: 20px ;
		}
		.pegangan{
			border-style: solid ;
			width: 40px;
			height: 20px;
			left: 50%;
			transform: translate(-50%);
			position: sticky;
			border-top-left-radius: 20px ;
			border-top-right-radius: 20px ;
		}

/*		tangki 2*/
		.tangki1{
			border-style: solid ;
			width: 300px;
			height: 300px;
			left: 50%;
			transform: translate(-50%);
			position: sticky;
			border-bottom-left-radius: 20px ;
			border-bottom-right-radius: 20px ;
		}
		.air1{
			left: 50%;
			bottom: 0px;
			transform: translate(-50%);
			position: absolute;
			border-bottom-left-radius: 20px ;
			border-bottom-right-radius: 20px ;
			background-color: red;
		}
		.penutup1{
			border-style: solid ;
			width: 300px;
			height: 40px;
			left: 50%;
			transform: translate(-50%);
			position: sticky;
			border-top-left-radius: 20px ;
			border-top-right-radius: 20px ;
		}
		.pegangan1{
			border-style: solid ;
			width: 40px;
			height: 20px;
			left: 50%;
			transform: translate(-50%);
			position: sticky;
			border-top-left-radius: 20px ;
			border-top-right-radius: 20px ;
		}
	</style>

	<!-- ajax untuk proses realtime -->
	<script type="text/javascript">
		$(document).ready(function(){
			setInterval(function(){
				$("#data").load('data.php')
			}, 1000);	
		});

		$(document).ready(function(){
			setInterval(function(){
				$("#data1").load('data1.php')
			}, 1000);	
		});
	</script>

</head>
<body>
	<!-- Tampilan Aplikasi -->
	<div class="container" style="text-align: center;">
		<!-- <img src="images/logokoper.png" style="width: 120px; margin-top: 25px;"> -->
		<h3>Sistem Monitoring Ketinggian dan Volume Air A<br> Berbasis Web <br>
		</h3>
		<div style="font-size: 20px;">Kotak Air (Tinggi Max: 3 Meter)</div>

		<div id="data"></div>
		<div id="data1"></div>
			
		</div>


	</div>

</body>
</html>