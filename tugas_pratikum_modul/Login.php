<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- digunakan untuk mengatur letak text, ketebalan text, memberi warna dan memberi border -->
	<style type="text/css">
		body{
			background-color: black;
			width: 90%;
		}
		h1{
			color: white;
			font-weight: bold;
			font-size: 50px;
			margin-left: 120px;
		}
		label{
			color: white;
			font-weight: bold;
			font-size: 25px;
		}
		form{
			margin-top: 200px;
			margin-left: 40%;
		}
		input[type=text]{
		    font-size: 15px;
		    width: 30%;
		    padding: 5px 20px;
		    margin: 8px 0;
		    border: 2px solid #ccc;
		    transition: 0.5s;
		    border-radius: 20px;
		}
		input[type=submit],
		input[type=reset]{
		    font-size: 15px;
		    color: white;
		    border-radius: 5px;
		    padding: 12px 20px;
		    cursor:pointer;
		    margin-top: 10px;
		}
		input[type=text]:focus {
		    border: 2px solid red;
		}
		input[type=submit]:hover,
		input[type=reset]:hover{
		    opacity:0.9;
		}
		input[type=reset]{
   			background: linear-gradient(to right, #000000 0%, #003300 100%);
		}
		input[type=submit]{
   			background: linear-gradient(to right, #003300 0%, #000000 100%);
		}
	</style>
</head>
<body>
	<form method="POST" action="data.php">
		<h1>Login</h1><br>
		<label>Nama :</label>
		<!-- untuk menyimpan data nama -->
		<input type="text" name="nama" placeholder="Nama" > <br><br>
		<label>Email :</label>
		<!-- menyimpan email -->
		<input type="text" name="email" placeholder="Email" ><br><br>
		<label>Waktu:</label>
		<!-- menyimpan waktu saat login -->
		<input type="text" name="waktu" value="<?php echo date("m-F-Y, g:i:s a") ?>" readonly> <br>
		<!-- untuk mereset text yang ada di kolom -->
		<input type="reset" name="reset" value="Reset">
		<input type="submit" name="login" value="Login">
	</form>
</body>
</html>