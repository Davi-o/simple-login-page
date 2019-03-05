<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="../assets/css/materialize.css" />
    <link rel="stylesheet" href="../assets/css/colors.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    <script src="../assets/js/materialize.js"></script>
    <script src="../assets/js/init.js"></script>
</head>

<body>
    <nav class="grey">
        <div>
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="">Fim</a></li>
            </ul>
        </div>
        <a class="btn blue modal-trigger" href="#modal">Login</a>
    </nav>
    <div id="modal" class="modal">
        <div class="modal-content">
            <h3 class="">Sistema de Login</h3>
            <?php if(isset($_SESSION['falha_de_autenticacao'])):?>
            <div class="">
                <script>
                M.toast({
                    html: 'ERRO: Usuário ou senha inválidos.'
                })
                </script>
            </div>
            <?php 
            unset($_SESSION['falha_de_autenticacao']);
            endif;
            ?>
            <form href="#!"action="../dao/login.php" method="POST">
                <input name="usuario" name="text" class="" placeholder="Seu usuário" autofocus="">
                <input name="senha" class="" type="password" placeholder="Sua senha">
                <button type="submit" class="btn">Entrar</button>
            </form>
        </div>
    </div>
</body>

</html>