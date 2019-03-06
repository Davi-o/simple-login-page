<?php
include_once '../model/user.class.php';
include_once '../dao/dao.class.php';
include_once '../dao/db.connection.php';
if(isset($_POST['usuario']) && isset($_POST['email']) && isset($_POST['senha'])){
    $user = new User();
    $db = new Dao();
    $user->userName = $_POST['usuario'];
    $user->passwd = md5($_POST['senha']);
    $user->fone = $_POST['telefone'];
    $user->mail = $_POST['email'];
    $db->registerUser($user);
    unset($_POST);
    header('Location: ../view/index.php');
}else{
    echo "Erro";
    header('Location: ../view/index.php');
}
