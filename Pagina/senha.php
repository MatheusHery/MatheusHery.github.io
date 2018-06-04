<?php

ob_start();

	$login ='matheus';
	$senha ='22021999'; 

	if ($login == $_POST['usuario'] && $senha == $_POST['password'])

		{


		$validacao = '1';

		$usuario = $_POST['usuario']; 

			session_start();

			//gravo as informações das variáveis dentro das sessões

			$_SESSION['usuario'] = $usuario;

			$_SESSION['validacao'] = $validacao;


			header ("Location: secreta.php");

		}


	Else //senao

	{

		echo 
			"<p align=center>
				Com esses dados não existe cadastro;
			</p>";	
		echo 
			"<p align=center>
				<a href=index.html>
					Clique aqui para voltar.
				</a>
			</p>";
}

?>