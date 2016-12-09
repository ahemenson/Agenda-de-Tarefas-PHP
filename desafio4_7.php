
<!DOCTYPE html>
<?php // session_start();?>
<html>
	<head>
			<title>4.7 Desafios</title>
		
	</head>
	<body>
			<h1> 4.7 Desafios </h1>
			<form>
					<fieldset>
							<legend>Seus dados</legend>
							<label>
									Nome:	<input type="text" name="nome"/></br>
							</label>
							<label>
									telefone:<input type="number_format" name="tel"/></br>
							</label>
							<label>
									Email:<input type="text" name="email"/></br>
							</label>
							<input type="submit" value="Cadastrar"/>
					<fieldset>
			</form>
			<?php
			
				// primeiro exemplo utilizado 
			
				 //$resposta = isset ($_GET ["nome"] )? $_GET["nome"]: "Informe o nome da Tarefa";
				 //echo $resposta;
				 
				 
				
				 
				 if (isset($_GET["nome"]) and isset($_GET["tel"]) and isset($_GET["email"])){
					 
					  setcookie('contatos',  $_GET["nome"] . " ". $_GET["tel"] . " " . $_GET["email"]);						 					
						
				 }
				 
				 $lista_contatos = array();
				  
				  if(isset($_COOKIE['contatos'])){
					  $lista_contatos = $_COOKIE['contatos'];
				  }
			?>
			
			<table>
				<tr>
					<th>Lista de Contatos</th>
				</tr>
				<?php foreach ($lista_contatos as $contatos) : ?>
				<tr>
					<td> <?php  echo $contatos; ?></td>
				</tr>	
				<?php endforeach; ?>					
			</table>	
					
    </body>
</html>