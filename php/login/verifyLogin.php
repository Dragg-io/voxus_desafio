<?php
	include_once "../config/connect.php";
	session_start();
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$sql = "SELECT * FROM user WHERE email_User = '$email' and pass_User = '$pass'";
	$query = $mysqli->query($sql);
	if (empty($query->fetch_array()))
	{
		$_SESSION['error_Login'] = "Email e/ou senha incorretos";
  		header("location:../../index.php");
	}
	else
	{
		$_SESSION['idUser'] = "logado";
		header("location:../../user/index.php");
	}
