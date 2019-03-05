<?php
class Helper{
    public static function errorToast(){
      echo "<script>M.toast({html: 'ERRO: Usuário ou senha inválidos.'})</script>";
    }
}