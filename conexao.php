
	<?php
		# dados para conexão com o banco de dados
		$servidor = 'localhost';
		$usuario = 'root';
		$senha = '';
		$banco = 'amazonia';
		
	# executa a conexão com o MySQL
	$mysqli = new mysqli($servidor,$usuario,$senha,$banco);
		
		if($mysqli->connect_error)
			echo "Falha na conexão; (".$mysqli->connect_error.")".$mysqli->connect_error;
		
	?>