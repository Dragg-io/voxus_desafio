<?php
include_once "../config/connect.php";
	$id = $_POST['id'];
	$sql = "DELETE FROM customer where id_Customer = '$id'";
	$query = $mysqli->query($sql);
	echo "Usuario Deletado";