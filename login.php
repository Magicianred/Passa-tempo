<?php
session_start();
if(isset($_REQUEST['login'])){
// aqui vai fazer o login
    if($_REQUEST['login']=='ok')
    {
        //pega os dados do formulario
        @$senha = $_REQUEST['senha'];
        @$usuario = $_REQUEST['usu'];

        if(($usuario == "admin") && ($senha == "1234"))
        {
            //cria a sessao pro usuario!
            $_SESSION['usu'] = $usuario;
            // redireciona pra pagina do site
            header ("location: tutorialbotaoneon.php");
        }
        else
        {
            // mensagem erro!
            echo(" Usuario ou senha invalidos!");
            //recarrega pra pagina do formulario 
           
        }
    }
//logout
    if($_REQUEST['login'] == 'sair')
    {
        //destroi sessao!
        session_destroy();
        //recarrega pra o index e testa tudo de novo
        header("location: index.php");
    }
}
?>