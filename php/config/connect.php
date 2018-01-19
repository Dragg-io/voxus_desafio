<?php
//Efetua conexão com banco
$mysqli = new mysqli("localhost","root","","voxus");
//apresenta erro caso conexão não ocorra
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());