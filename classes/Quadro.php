<?php

namespace classes;

require 'vendor/autoload.php';

use classes\Database;

class Quadro{

    public static function listarTodos():string{
        $query = 'SELECT id,titulo,autoria,ano,descricao,imagem FROM quadros';
        $stmt = (new Database)->executarQuery($query);
        return json_encode($stmt->fetchAll(\PDO::FETCH_ASSOC));
    }
}
