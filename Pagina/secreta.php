<?php           

session_start();

	$valorparaentrar = '1';
	$teste = $_SESSION['validacao'];

	if ($valorparaentrar == $teste)

		{

			echo 
				"<p align=center>Seja bem vindo a Página restrita.
				</p>";
			echo 
				"<p align=center>
					<a href=deslogar.php>
						Clique para deslogar.
					</a>
				</p>";
			echo 
				"<p align=center>
					<a href=falecomoteacher.html>
						Clique aqui para testar o fale com o teacher.
					</a>
				</p>";
			
		}

	else

		{
			echo 
				"<p align=center>
						Tchau
				</p>";

}
?>
