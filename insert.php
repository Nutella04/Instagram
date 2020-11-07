<?php 
	header('Location: index.php');

	$connect = mysqli_connect("127.0.0.1", "root", "", "instagram");

	$text_zaprosa_vstavit = "INSERT INTO posts(users, img, text) 
							VALUES('{$_GET["user"]}', '{$_GET["img"]}', '{$_GET["text"]}')";

	$zapros_vstavit = mysqli_query($connect, $text_zaprosa_vstavit);
 ?>