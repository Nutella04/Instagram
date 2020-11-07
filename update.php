<?php 
	header('Location: index.php');
	$con = mysqli_connect('127.0.0.1', 'root','','instagram');
	$zapros = "UPDATE posts SET text = '". $_GET["text"] ."' WHERE id='". $_GET["id"] ."'";
	$query = mysqli_query($con, $zapros);
	$query2 = mysqli_query($con, $zapros2);
 ?>