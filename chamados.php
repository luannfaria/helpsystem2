
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="stilo.css" type="text/css" />
<title>Chamados</title>
</head>
<body>

<h1>Chamados</h1>
<div id="menuprincipal" style="background-image: url(imagens/backmenu.jpg)">
	
<ul>
	<a href="listacliente.php"><img id="imgmenu" title="Clientes" src="imagens/client.png"></a><br>
	<a href="listachamado.php"><img id="imgmenu" title="Chamados" src="imagens/support.png"></a><br>
	<a href="relatorios.html"><img id="imgmenu" title="Relatorio" src="imagens/relatorio.png"></a><br>
	<a href="usuario.html"><img id="imgmenu" title="Configurações" src="imagens/configure.png"></a>
</ul>
</div>
	<div id="divcentral">
	<fieldset>
	<legend>Novo chamado</legend>
			<label>Nome Cliente</label>
				<input type="text" required name="nomecliente"/>
			<label>Titulo</label>
                        <input type="text" name="titulo" /><br>
			<label>Observação</label> 
				<input type="text" name="rua"/>	<br>
				Status
			<input type="radio" name="status" value="ABERTO">Aberto 
			<input type="radio" name="status" value="FECHADO">Fechado 
				
			
			
		 <input id="imgentrar" type="image" src="imagens/add.png" title="Adicionar Cliente" value="submit" />
		 </fieldset>
	
		
	</div>
</body>
</html>

