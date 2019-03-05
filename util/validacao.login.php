<?php
session_start();
if(!$_SESSION['usuario']){
    header('Location: ../view/index.php');
    exit();
}
