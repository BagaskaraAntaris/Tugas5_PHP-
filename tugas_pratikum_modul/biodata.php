<!DOCTYPE html>
<html>
<head>
	<title>Biodata Saya</title>
	<style type="text/css">
		/*Memberi warna pada body html*/
		body{
			background: black;
			width: 99%;
			height: 90vh;
		}
		/*memberi warna, mengatur tinggi & lebar pada class luar*/
		.luar{
			background: linear-gradient(to top, #000000 0%, #339933 100%);
			width: 100%;
			height: 90vh;
		}
		/*memberi warna, mengatur tinggi & lebar, mengatur letak dan memberi border pada class kotak*/
		.kotak{
			background: white;
			width: 40%;
			height: 500px;
			border: 2px solid black;
			border-radius: 40px;
			margin-left: 400px;
		}
		/*mengatur ukuran text dan mengatur letak text h1*/
		h1{
			text-align: center;
			font-size: 40px;
		}
		/*mengatur letak text h2*/
		h2{
			margin-left: 15px;
		}
	</style>
</head>
<body>
	<div class="luar">
		<h1>Biodata</h1>
		<div class="kotak">
			<!-- tempat data untuk dipanggil -->
			<?php  
				$nama = "Bagaskara Antaris";
				$npm = "19082010094";
				$tinggal = "Griya Bhayangkara Sukodono Sidoarjo";
				$hobi = "Bermain Game";
				$status = "Jomblo";
				$sekolah = "UPN Veteran Jawa Timur";
			?>
			<h2> 
				<!-- pemanggilan data untuk ditampilkan -->
				Nama &emsp;&emsp;&emsp;&emsp; : <?php echo $nama; ?><br>
				NPM  &emsp;&emsp;&emsp;&emsp;&ensp;: <?php echo $npm; ?> <br>
				Tempat Tinggal : <?php echo $tinggal; ?> <br>
				Status &emsp;&emsp;&emsp;&emsp;: <?php echo $status; ?> <br>
				Foto &emsp;&emsp;&emsp;&emsp;&ensp; : <?php echo '<img src = "2.jpg"; width = "150px"/>' ?> <br>
				Hobi &emsp;&emsp;&emsp;&emsp;&ensp;: <?php echo $hobi; ?> <br>
				Sekolah &emsp;&emsp;&emsp; : <?php echo $sekolah ?>
			</h2>
		</div>
	</div>
</body>
</html>