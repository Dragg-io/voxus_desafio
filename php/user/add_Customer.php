<?php
	include_once "../config/connect.php";
	session_start();
	$name = $_POST['name'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$sql = "INSERT INTO `customer` (`name_Customer`, `tel_Customer`, `email_Customer`) VALUES ('$name', '$tel', '$email')";
	$query = $mysqli->query($sql);

		$_SESSION['update_Message'] = "Cliente Adicionado";
		header("location:../../user/index.php");