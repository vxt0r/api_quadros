<?php

namespace classes;

use PDO;
use PDOException;
use PDOStatement;

class Database{

    private $conexao;

    public function __construct(){
        $this->conexao = $this->conectar();
    }

    private function conectar():PDO{
        try{
            $conexao = new PDO("mysql:host=localhost;dbname=api_quadros",'root','2342');
            return $conexao;

        }catch(PDOException $e){
            echo '<p>'. $e->getMessage() .'</p>';
        }
    }

    public function executarQuery(string $query,array $parametros=[]):PDOStatement{
        $statement = $this->conexao->prepare($query);

        if(count($parametros) > 0){
            foreach($parametros as $i=>$parametro){
                $statement->bindValue($i + 1,$parametro);
            }
        }
        $statement->execute();
        return $statement;
    }
}
