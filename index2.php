<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$con = mysqli_connect('127.0.0.1', 'root','','instagram');
		$zapros = "UPDATE posts SET text='Красивый лес!' WHERE id='2'";
		$query = mysqli_query($con, $zapros)

	 ?>
</body>
</html>