<?php

//Se vier qualquer coisa via get
if ($_POST) {
    //print_r($_GET);
    //entra aqui e pega os valores.
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    @$lembrar = $_POST['lembrar'];
    
    //abrir a conexao
    $dados = array('email'=>'a@a','senha'=>'asasas');
    //executar a consulta
    if ($email == $dados['email'] && $senha == $dados['senha']) {
      
        
      //Abrir a sessão
        session_start();
        //Criei a sessão "login"
        $_SESSION['login'] = $email;
        
        //Se o checkbox estiver selecionado
        if(isset($lembrar)){
            if($lembrar == 1){
                //Crio o cookie- nome, valor, tempo de vida em segundos
                setcookie('email', $email, time() + (86400 * 30), "/"); // 86400 segundos = 1 dia
            }
        }else{
            //Se ele não estiver selecionado e o cookie existir...destruo
            if (isset($_COOKIE['email'])) {
                //destruir o cookie
                setcookie("email", "", time()  - (86400 * 30), "/");
            }
        }
        
        header('location:../home.php');
    } else {
        //Login inválido 
        header('location:../index.php?cod=171');
    }
} else {
    //redireciona para a index
    header('location:../index.php');
}
?>
