<?php
include ('../util/validacao.login.php');
//print_r($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/materialize.css" />
    <link rel="stylesheet" href="../assets/css/colors.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    <script src="../assets/js/init.js"></script>
    <script src="../assets/js/materialize.js"></script>
    <title>Painel</title>
</head>
<body>

    <div class="row">
        <div class="col s12">
            <div class="tabs">
                <div class="tab col s6">
                    Olá, <?php echo $_SESSION['usuario'];?>
                </div>
                <a class="btn" href="../dao/logout.php">Sair</a>           
            </div>
        </div>
    </div>
</body>
</html>
