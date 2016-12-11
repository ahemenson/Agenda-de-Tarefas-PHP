<!DOCTYPE html>
<html>
	<head>	
			<title>Gerenciador de Tarefas</title>
			<meta charset="utf-8" />		
			<link rel="stylesheet" href="tarefas.css" type="text/css" />
						
	</head>
		
	<body>
			<h1> Gerenciador de Tarefas </h1>
			
			<?php include("formulario.php"); ?>
			
			<?php if($exibir_tabela) : ?>
				<?php include("tabela.php"); ?>
			<?php endif; ?>		
    </body>
</html>