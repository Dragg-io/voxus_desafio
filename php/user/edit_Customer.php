<?php
	include_once "../config/connect.php";
	session_start();
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$sql = "UPDATE customer set name_Customer = '$name', email_Customer = '$email', tel_Customer = '$tel' WHERE id_Customer = '$id'";
	$query = $mysqli->query($sql);

		$_SESSION['update_Message'] = "Cliente Atualizado";
		header("location:../../user/index.php");

