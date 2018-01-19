<?php
session_start();
include_once "../php/functions/functions_Aux.php";
if (!isset($_SESSION['idUser'])){
	header("location:../index.php");
}
