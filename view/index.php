<?php session_start(); include_once '../util/helper.class.php';?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
                        <li class="menu-item"><a id="list-item1" onclick="smoothScrollBegin(),setActive(this.id)"
                                href="#!">Inicio</a></li>
                        <li class="menu-item"><a id="list-item2"
                                onclick="smoothScrollContact(),setActive(this.id)">Contatos</a>
                        </li>
                        <?php if(isset($_SESSION['usuario'])):?>
                        <li> Olá, <?php echo $_SESSION['usuario'];?></li>
                        <li><a class="btn" href="../dao/logout.php">Sair</a></li>
                        <?php else:?>
                        <li><a class="btn modal-trigger" href="#modal">Login</a></li>
                        <?php endif;?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <section>
        <div class="blue-grey darken-4">

            <div class="bcg-img center flow-text">
            <?php if(!isset($_SESSION['cadastrar'])):?>
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
                <?php else:?>
                    <div id="registForm" class="row txt">
                        <h1>Cadastre-se</h1>
                        <form class=" registForm col s12" action="../controller/controller.php" method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="nomeusuario" type="text" name="usuario" class="teal-text validate" required>
                                    <label for="nomeusuario">Nome de Usuário</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" name="email" class="teal-text validate" required>  
                                    <label for="email">Email</label>  
                                    <span class="helper-text" data-error="Insira um email válido" data-success="Email bacana"></span>                           
                                </div>
                            </div>                        
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="telefone" type="text" name="telefone" class="teal-text">
                                    <label for="telefone">Telefone</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s11">
                                    <input id="password" type="password" name="senha" class="teal-text validate" required>
                                    <label for="password">Senha</label>
                                </div>
                                <div class="col s1">
                                <a href="#!" type="btn-flat" onclick="showHidePwd()"><i id="visibility" class="material-icons grey-text">visibility</i></a>
                                </div>
                                <button type="submit" class="btn">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                <?php endif;  unset($_SESSION['cadastrar']);?>
            </div>
        </div>
        <div id="modal" class="modal blue-grey darken-3">
            <div class="modal-content">
                <h3 class="teal-text">Login</h3>
                <form href="#!" action="../dao/login.php" method="POST">
                    <input name="usuario" name="text" class="teal-text" placeholder="Seu usuário" required>
                    <input name="senha" class="teal-text" type="password" placeholder="Sua senha" required>
                    <button type="submit" class="btn">Entrar</button>
                    <a href="../util/register.php" type="button" class="btn-flat teal-text" onclick="registForm()">Cadastre-se</a>
                    <?php if(isset($_SESSION['falha_de_autenticacao'])){
                            Helper::errorToast();
                            unset($_SESSION['falha_de_autenticacao']);
                        }
                    ?>
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
            <div class="container">
                © 2014 Copyright Text
                <a id="contato" class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
</body>

</html>