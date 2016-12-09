<!DOCTYPE html>
<html>
	<head>	
			<title>Gerenciador de Tarefas</title>
			<meta charset="utf-8" />		
			<link rel="stylesheet" href="tarefas.css" type="text/css" />
						
	</head>
		
	<body>
			<h1> Gerenciador de Tarefas </h1>
			<form>
					<fieldset>
							<legend>Nova Tarefa</legend>
							<label>
									Tarefa:
									<input type="text" name="nome"/>
							</label>
							<label>
								Descrição (Opcional):
								<textarea  type="text" name="descricao"></textarea>
							</label>
							<label>
								Prazo (Opcional):
								<input type="text" name="prazo" />
							</label>
							<fieldset>
								<legend>Prioridade:</legend>
								<label>
									<input type="radio" name="prioridade" value="1" checked /> 
									Baixa
									<input type="radio" name="prioridade" value="2" /> 
									Média
									<input type="radio" name="prioridade" value="3" /> 
									Alta
								</label>
							</fieldset>
							<label>
								Tarefa concluída:
								<input type="checkbox" name="concluida" value="1" />
							</label>							
							<input type="submit" value="Cadastrar"/>
					</fieldset>
			</form>
			
			<table>
				<tr>
				    
					
					<th>Tarefa</th>
					<th>Descricão</th>
				    <th>Prazo</th>
					<th>Prioridade</th>
					<th>Concluída</th>
				</tr>
				<?php 				
							
				foreach ($lista_tarefas as $tarefa) : ?>
					<tr>
					    <td> <?php  echo $tarefa["nome"]; ?></td>
						<td> <?php  echo $tarefa["descricao"]; ?></td>
						<td> <?php  echo traduz_data_para_usuario($tarefa["prazo"]); ?></td>
						<td> <?php  echo traduz_prioridade($tarefa["prioridade"]);?></td>
						<td> <?php  echo traduz_tarefa_concluida($tarefa["concluida"]); ?></td>	
						
						 <?php/*
						 if(($tarefa["prioridade"]) == 1){echo "Baixa";}
						 if(($tarefa["prioridade"]) == 2){echo "Média";}
						 if(($tarefa["prioridade"]) == 3){echo "Alta";}
						*/?>											
					</tr>	
				<?php endforeach; ?>					
			</table>	
					
    </body>
</html>