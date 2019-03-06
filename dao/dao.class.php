<?php
require_once 'db.connection.php';

class Dao{
    private $connection = null;

    public function __construct(){
        $this->connection = DbConnection::getInstance();
    }
    public function __destruct(){}
    
    public function registerUser($user){
        try {
            $stat = $this->connection->prepare("insert into usuario(id_usuario, nome_usuario, senha, email, telefone)values(null,?,?,?,?)");
            $stat->bindValue(1,$user->userName);
            $stat->bindValue(2,$user->passwd);
            $stat->bindValue(3,$user->fone);
            $stat->bindValue(4,$user->mail);
            $stat->execute();
        } catch (PDOexception $e) {
            echo "Erro ao cadastrar a pessoa";
        }
    }
}