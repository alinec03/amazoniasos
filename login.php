<?php
session_start();
$login = $_POST ['nome'];
$senha = $_POST ['senha'];
$conexao = mysql_connect('localhost', 'root', '') or die ("sem conexao Servidor");

$select = mysql_select_db('amazonia') or die ("Erro de conexão banco de dados");
$consulta = mysql_query("select * from `login` WHERE `nome` = '$login' and `senha`= '$senha'");
if (mysql_num_rows($consulta)>0)
{
	$_session['nome'] = $login;	
	$_session['senha'] = $senha;
	header('location: home.php'); 
}
else
{
	unset($_session['nome']);
	unset($_session['senha']);
    header('location: index.html');
}

?>