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
    <header>
        <nav class="grey darken-4">
            <div>
                <ul>
                    <li class="menu-item"><a href="">Inicio</a></li>
                    <li class="menu-item"><a href="">Fim</a></li>
                    <li><a class="btn modal-trigger" href="#modal">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <section>
        <div class="card-panel">
            <div class="card-content">
                <p>AAAAA</p>
            </div>
        </div>
        <div id="modal" class="modal blue-grey darken-3">
            <div class="modal-content">
                <h3 class="teal-text">Login</h3>
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
                    <input name="usuario" name="text" class="teal-text" placeholder="Seu usuário" autofocus="" required>
                    <input name="senha" class="teal-text" type="password" placeholder="Sua senha" required>
                    <button type="submit" class="btn">Entrar</button>
                </form>
            </div>
        </div><!-- Login -->
    </section>
    <footer>
    </footer>
</body>

</html>