<?php
	include_once "../php/functions/functions_Aux.php";
	include_once "../php/config/security.php";
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Desafio PHP | Voxus</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="../css/font-awesome.min.css" />
			<link rel="stylesheet" href="../css/user/style.css" />
			<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
			<script type="text/javascript" src="../js/jquery.js"></script>
			<script type="text/javascript" src="../js/script.js"></script>
		</head>
	<body onload="writeTable()">
			<section id="Panel">
				<nav id="menu">
					<ul>
						<a id="addCustomer" onclick="document.getElementById('customerAdd').style.display='block';" href="#"><li><span class="fa fa-address-book"></span></li></a>
						<a href="../php/config/logout.php" ><li><span class="fa fa-sign-out"></span></li></a>
					</ul>
				</nav>
				<span id="Message"><?php echo message('update_Message')?></span>
				<section id="content">

				</section>
			</section>
			<div id="customer" class="w3-modal">
				<div class="w3-modal-content w3-animate-top w3-card-4">
					<header class="w3-container w3-teal">
						<span onclick="document.getElementById('customer').style.display='none'"
				        class="w3-button w3-display-topright">&times;</span>
				        <h2>Editar Cliente: <span id="name_Customer"></span></h2>
      				</header>
					<form method="POST" action="../php/user/edit_Customer.php">
						<input type="hidden" name="id" id="id">
						<label>
							<p>Name</p>
							<input type="name" name="name" id="name" required>
						</label>
						<label>
							<p>Email</p>
							<input type="email" name="email" id="email" required>
						</label>
						<label>
							<p>Telefone</p>
							<input type="Telefone" name="tel" id="tel" required>
						</label><br>
						<button>Editar</button>
					</form>
				</div>
			</div>
			<div id="customerAdd" class="w3-modal">
				<div class="w3-modal-content w3-animate-top w3-card-4">
					<header class="w3-container w3-teal">
						<span onclick="document.getElementById('customerAdd').style.display='none'"
				        class="w3-button w3-display-topright">&times;</span>
				        <h2>Adicionar Cliente</span></h2>
      				</header>
					<form method="POST" action="../php/user/add_Customer.php">
						<label>
							<p>Name</p>
							<input type="name" name="name" required>
						</label>
						<label>
							<p>Email</p>
							<input type="email" name="email" required>
						</label>
						<label>
							<p>Telefone</p>
							<input type="Telefone" name="tel" required>
						</label><br>
						<button>Criar</button>
					</form>
				</div>
			</div>
	</body>
</html>
