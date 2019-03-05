<?php
session_start();
$_SESSION['cadastrar'] = true;
header('Location: ../view/index.php');
exit();