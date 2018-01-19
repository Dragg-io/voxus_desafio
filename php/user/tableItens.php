<?php
	include_once "../config/connect.php";
	$sql = "SELECT * FROM customer order by name_Customer";
	$query = $mysqli->query($sql);
	echo "<table>
						<tr>
							<th>Opções</th>
						    <th>Nome</th>
						    <th>Telefone</th>
						    <th>Email</th>
						</tr>
		";
	while ($data = $query->fetch_array()) {
		echo 
		"<tr>
			<td><a class='fa fa-pencil-square-o' href='#' onclick='editCustomer(".$data['id_Customer'].",\"".$data['name_Customer']."\",\"".$data['tel_Customer']."\",\"".$data['email_Customer']."\")'></a>
			<a class='fa fa-trash' href='#' onclick='deleteCustomer(".$data['id_Customer'].
			")'></a>
			</td>
			<td>".$data['name_Customer']."</td>
			<td>".$data['tel_Customer']."</td>
			<td>".$data['email_Customer']."</td>
	    </tr><br>";
	}
	echo "</table>";