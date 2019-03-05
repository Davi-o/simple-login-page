<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="../assets/css/materialize.css" />
    <link rel="stylesheet" href="../assets/css/colors.css" />
    <link rel="stylesheet" href="../assets/css/mycss.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    <script src="../assets/js/materialize.js"></script>
    <script src="../assets/js/init.js"></script>
</head>

<body>
    <header>
        <div id="inicio" class="navbar-fixed">
            <nav class="grey darken-4">
                <div class="nav-wrapper">
                    <ul class="right">
                        <li class="menu-item"><a onclick="smoothScrollBegin()" href="#!">Inicio</a></li>
                        <li class="menu-item"><a onclick="smoothScrollContact()">Contatos</a></li>
                        <li><a class="btn modal-trigger" href="#modal">Login</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <section>
        <div class="blue-grey darken-4">

            <div class="bcg-img center flow-text">
                <div class="txt">
                    <h1>Bem Vindo</h1>
                    <p>O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo
                        a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os
                        caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos,
                        mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi
                        popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham passagens
                        com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que
                        incluem versões do Lorem Ipsum.</p>
                </div>
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
                <form href="#!" action="../dao/login.php" method="POST">
                    <input name="usuario" name="text" class="teal-text" placeholder="Seu usuário" required>
                    <input name="senha" class="teal-text" type="password" placeholder="Sua senha" required>
                    <button type="submit" class="btn">Entrar</button>
                </form>
            </div>
        </div><!-- Login -->
    </section>
    <footer class="page-footer grey darken-3">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer
                        content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright grey darken-4">
            <div id="contato" class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
</body>

</html>