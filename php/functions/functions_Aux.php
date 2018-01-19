<?php

	//Tratamento, mensagens de ERRO
	function message($Message)
	{
		if (isset($_SESSION[$Message])) {
			echo $_SESSION[$Message];
			unset($_SESSION[$Message]);
		}

	}
