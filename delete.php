<?php 
	header('Location: index.php');

	$connect = mysqli_connect("127.0.0.1", "root", "", "instagram");

	$text_zaprosa = "DELETE FROM posts WHERE id = '".$_GET["id"]."'";

	$zapros_vstavit = mysqli_query($connect, $text_zaprosa);

 ?>