<?php
//verifica se o usuario está logado
session_start();
if(!$_SESSION['usuario']){
    header('Location: ../view/index.php');
    exit();
}
