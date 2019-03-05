<?php
session_start();
include 'connection.php';
if(!isset($_POST['usuario']) || !isset($_POST['senha'])){
    header('Location: ../view/index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select id_usuario, nome_usuario from usuario where nome_usuario = '{$usuario}' and senha= md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: ../view/painel.php');
    exit();
}else{
    $_SESSION['falha_de_autenticacao'] = true;
    header('Location: ../view/index.php');
    exit();
}