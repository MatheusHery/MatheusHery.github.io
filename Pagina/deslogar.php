<?php

ob_start();

//INICIALIZA A SESSÃO

	session_start();

	//DESTRÓI  AS SESSÕES

	unset($_SESSION[usuario]); // O comando unset é utilizado para a remoção de variáveis declaradas.
	unset($_SESSION[validacao]); // O comando unset é utilizado para a remoção de variáveis declaradas.

	session_destroy(); // REDIRECIONA PARA A TELA DE LOGIN

	Header("Location: index.html"); // Volta para a tela de login e senha

?>
