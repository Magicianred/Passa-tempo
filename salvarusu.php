<?php 
    include ("conexao.php");

    $usuario = $_POST['usu'];
    $senha   = $_POST['senha'];

    $resultado="INSERT INTO usuarios (usunome,ususenha) VALUES ('$usuario','$senha')";
    $resultadoUsuario=mysqli_query($conexao,$resultado);
?>