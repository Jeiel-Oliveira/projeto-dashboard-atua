<?php

require_once 'Class.Conexao.php';

class Crud{

    private static $pdo;
    private static $tabela;

    public static function setConexao($conexao){
        self::$pdo = $conexao;
    }

    public static function setTabela($tabela){
        self::$tabela = $tabela;
    }

    private static function montaSQLInsert($arrayDados){
            $campos = implode(',', array_keys($arrayDados));
            $params = ':' . implode(', :', array_keys($arrayDados));

            $sql = 'INSERT INTO ' . static::$tabela;
            $sql .= '(' . $campos . ') VALUES (' . $params . ')';
            return $sql;
    }

    private static function montaSQLUpdate($arrayDados, $arrayCondicao){
            $sql = 'UPDATE ' . static::$tabela . ' SET ';

            foreach ($arrayDados as $key => $value):
                $sql .= "{$key} = :{$key}, ";
            endforeach;
            $sql = rtrim($sql, ', ');

            $sql .= ' WHERE ';
            foreach ($arrayCondicao as $key => $value):
                $sql .= "{$key} = :{$key} AND";
            endforeach;

            $sql = rtrim($sql, 'AND');

            return $sql;
    }

    private static function montaSQLDelete($arrayCondicao){
            $sql = 'DELETE FROM ' .static::$tabela;

            $sql .= ' WHERE ';
            foreach ($arrayCondicao as $key => $value):
                $sql .= "{$key} = :{$key} AND";
            endforeach;
            $sql = rtrim($sql, 'AND');

            return $sql;
    }

    public static function Insert($arrayDados){
            $sql = self::montaSQLInsert($arrayDados);
            $stm = self::$pdo->prepare($sql);

            foreach($arrayDados as $key => $valor):
                $stm->bindValue(':' . $key, $valor);
            endforeach;

            $retorno = $stm->execute();
            return $retorno;
    }

    public static function Update($arrayDados, $arrayCondicao){
            $sql = self::montaSQLUpdate($arrayDados, $arrayCondicao);
            $stm = self::$pdo->prepare($sql);

            foreach($arrayDados as $key => $valor):
                $stm->bindValue(':' .$key, $valor);
            endforeach;

            foreach($arrayCondicao as $key => $valor):
                $stm->bindValue(':' . $key, $valor);
            endforeach;

            $retorno = $stm->execute();
            return $retorno;
    }

    public static function Delete($arrayCondicao){
            $sql = self::montaSQLDelete($arrayCondicao);
            $stm = self::$pdo->prepare($sql);

            foreach($arrayCondicao as $key => $valor):
                $stm->bindValue(':' . $key, $valor);
            endforeach;

            $retorno = $stm->execute();
            return $retorno;
    }

    public static function Select($sql, $arrayCondicao, $fetch){
        $stm = self::$pdo->prepare($sql);

        foreach($arrayCondicao as $key => $valor):
            $stm->bindValue(':' . $key, $valor);
        endforeach;

        $stm->execute();

        if($fetch):
            return $stm->fetchAll(PDO::FETCH_OBJ);
        else:
            return $stm->fetch(PDO::FETCH_OBJ);
        endif;
    }

}

// 1 - PASSOR UMA CONEXÃO
// 2 - PASSAR O NOME DA TABELA
// 3 - CHAMAR O MÉTODO ADEQUADO

// Crud::setConexao(Conexao::getConexao);
// Crud::setTabela('tb_pessoa');

// FAZENDO INSERT DE UM NOVO DADO
// Crud::Insert(['DESCRICAO' => 'Xiaomi', 'VALOR' => '800', 'STATUS' => 'Chegando...']);
// Crud::Insert(['DESCRICAO' => 'Iphone X', 'VALOR' => '4000', 'STATUS' => 'Em estoque']);
// Crud::Insert(['DESCRICAO' => 'S10', 'VALOR' => '4200', 'STATUS' => 'Em estoque']);
// Crud::Insert(['DESCRICAO' => 'Iphone 7', 'VALOR' => '2800', 'STATUS' => 'A pedir...']);
// Crud::Insert(['DESCRICAO' => 'Moto G7', 'VALOR' => '1800', 'STATUS' => 'Em estoque']);
// Crud::Insert(['DESCRICAO' => 'Zenfone', 'VALOR' => '2300', 'STATUS' => 'Chegando...']);
// Crud::Insert(['DESCRICAO' => 'Alcatel', 'VALOR' => '421', 'STATUS' => 'Em estoque...']);
// Crud::Insert(['DESCRICAO' => 'Blackberry', 'VALOR' => '250', 'STATUS' => 'Chegando...']);
// Crud::Insert(['DESCRICAO' => 'Sony Ericson', 'VALOR' => '689', 'STATUS' => 'A pedir']);
// Crud::Insert(['DESCRICAO' => 'Pocophone', 'VALOR' => '1000', 'STATUS' => 'Em estoque']);
// echo '<br>===================================================================================<br>';

// FAZENDO UPDATE NO NOME, ONDE ID = 1
// Crud::Update(['DESCRICAO' => 'Nokia One Vision'], ['ID' => 9]);
// Crud::Update(['DESCRICAO' => 'Alcatel A44'], ['ID' => 7]);
// Crud::Update(['DESCRICAO' => 'Motorola V8'], ['ID' => 8]);
// Crud::Update(['VALOR' => 640], ['ID' => 8]);

// FAZENDO DELETE
// Crud::Delete(['ID' => 10]);
// Crud::Delete(['ID' => 9]);