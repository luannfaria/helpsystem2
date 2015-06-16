
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
	<a href="Clientes.html"><img id="imgmenu" title="Clientes" src="imagens/client.png"></a><br>
	<a href="listachamado.php"><img id="imgmenu" title="Chamados" src="imagens/support.png"></a><br>
	<a href="relatorios.html"><img id="imgmenu" title="Relatorio" src="imagens/relatorio.png"></a><br>
	<a href="usuario.html"><img id="imgmenu" title="Configurações" src="imagens/configure.png"></a>
</ul>
</div>
	<div id="divcentral">
	 	<div id ="lista">
		 	<fieldset>
		 	<legend >Chamados</legend>
	<?php 	include_once 'conexao.php';
	$query = "SELECT * FROM atendimento";
	$query = mysql_query($query);
	echo "<table border=1 style=border-collapse: collapse>";
	
		echo "    <tr>";
		echo "        <td>";
		echo "            ID";
		echo "        </td>";
		echo "        <td>";
		echo "           TITULO";
		echo "        </td>";
		echo "        <td>";
		echo "           OBSERVACAO";
		echo "        </td>";
		echo "        <td>";
		echo "           STATUS";
		echo "        </td>";
		
		echo "    </tr>";

while($dados = mysql_fetch_array($query))
	{
		echo "<tr>";
		echo "   <td>";
		echo        $dados['id'];
		echo "   </td>";
		echo "   <td>";
		echo        $dados['titulo'];
		echo "   </td>";
		echo "   <td>";
		echo        $dados['observacao'];
		echo "   </td>";
		echo "   <td>";
		echo        $dados['status'];
		
		echo "   </td>";
		echo "   <td>";
		echo "<button onclick=(?=deleta()?)>DELETAR</button>";
		
		echo "   </td>";
		
		echo "</tr>";
		
		
		
}
	function deleta(){
		include_once 'conexao.php';
	$query = "delete * from cliente where id='12'";
	$query = mysql_query($query);
	//+$dados['id']+
		
	}
	
echo "</table>";

?>
<a href="chamados.php"><img id="imgmenu" title="cadastro" src="imagens/add.png"></a>
</fieldset>
</div>
		
	</div>
	
</body>
</html>