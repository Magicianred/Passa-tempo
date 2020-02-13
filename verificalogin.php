<?php
//conecta-se à sessão
//qdo trabalhamos com sessão, devemos
//sempre chamar esta função no topo do programa
session_start();
//print_r($_SESSION);

//se a sessão possui o campo usuario criado
if(isset($_SESSION['usu'])){
	$usuario = $_SESSION['usu'];
	echo("<style>h4{color: #a54c4c; font-size: 20px;}</style><h4>Usuário: $usuario</h4>");
	
	//inclui formulário para logout
	include("logoutform.php");
}
else {
	//inclui formulário para login
	include("loginform.php");
	//encerra o programa (nada após este ponto será executado)
	exit();
}
?>