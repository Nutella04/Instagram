<?php 
	header('Location: index.php');
	$con = mysqli_connect('127.0.0.1', 'root','','instagram');
	$zapros2 = "UPDATE posts SET img = '". "img/". $_GET["img"] ."' WHERE id='". $_GET["id"] ."'";
	$query = mysqli_query($con, $zapros);
	$query2 = mysqli_query($con, $zapros2);
 ?>