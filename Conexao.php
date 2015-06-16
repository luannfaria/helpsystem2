<?php
$host="mysql.hostinger.com.br";
//Banco Local

$user = "u940045443_help";
$pass = "clara02";
$banco = "u940045443_help";

//Banco Online

//$user = "root";
//$pass = "clara02";
//$banco = "local2";

mysql_connect($host, $user,$pass) or die("BANCO NAO CONECTOU");
mysql_select_db($banco)or die("nao selecionou banco");
?>