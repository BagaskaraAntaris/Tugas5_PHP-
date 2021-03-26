<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		/*memberi warna dan mengatur lebar body*/
		body{
			background-color: black;
			width: 90%;
		}
		/*memberi warna pada label, text jadi tebal, dan mengatur ukuran size pada label*/
		label{
			color: white;
			font-weight: bold;
			font-size: 25px;
		}
	</style>
</head>
<body>
	<!-- jika data kosong -->
	<?php if (empty($_POST['nama'])): ?>
		<?php header("Location:empty.php") ?>
		<!-- jika tidak kosong -->
		<?php else: ?>
			<label>Nama &emsp;&emsp;&emsp;: <?php  echo $_POST['nama']; ?></label> <br>
			<label>Email &emsp;&emsp;&emsp;: <?php  echo $_POST['email'] ?></label><br>
			<label>Waktu Login : <?php  echo $_POST['waktu'] ?></label>
	<?php endif ?>
</body>
</html>