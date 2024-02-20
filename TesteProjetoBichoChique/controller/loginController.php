<?php
if($_POST){
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    //vem com dados email e senha do form
    require_once '../model/proprietariosModel.php';
    $usuario = new proprietariosModel();
    $total = $usuario->login($email, $senha); //retorna 0 ou 1
    
    if($total==1){
        //Que tem usuario com emal e senha ok
        session_start();
        $_SESSION['id'] = $usuario->getId();
        $_SESSION['login'] = $usuario->getNome();
        header('location:../home.php');
    }else{
        header('location:../index.php?cod=171');
    }  
}else if($_REQUEST){
    
}else{
    require_once '../model/animaisModel.php';
    $animal = new animaisModel();
    $animal->loadById(1);
    $raca = $animal->getRaca();
    echo 'O animal '. $animal->getNome(). 'é da raça '. $raca->getNome();
}