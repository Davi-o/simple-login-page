<?php
define('HOST','127.0.0.1');
define('USUARIO','dawhi');
define('SENHA','123');
define('DB','login');
 
$conexao= mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('ERRO');