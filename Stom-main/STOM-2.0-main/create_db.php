<?php
session_start();
$localhost = "127.0.0.1:3306";
$user = "root";
$senha = "42";
$banco = "jogo3ds";  

$ligacao = mysqli_connect($localhost, $user, $senha, $banco);

if (!$ligacao) 
   {
	( die("Conexao falhou:" . mysqli_connect_error())) ;
   }
else
	{
		
	 echo"BD conectado com sucesso.<br>";
	}
?>