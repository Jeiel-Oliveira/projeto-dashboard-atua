<?php

define('SGBD', 'mysql');
define('USER', 'root');
define('PASSWORD', 'usbw');
define('SERVER', 'localhost:3307');
define('DATABASE', 'atua');

class Conexao{
    
    private static $pdo;

    private function __construct(){

    }

    public static function getConexao(){

        if(!self::$pdo):
            
            switch(SGBD){
                    case 'mysql':
                        $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
                        self::$pdo = new PDO('mysql:host='.SERVER.';dbname='.DATABASE.';', USER,PASSWORD, $opcoes);
                        break;

                    case 'postgree':
                        self::$pdo = new PDO('psql:host='.SERVER.';dbname='.DATABASE.';', USER,PASSWORD);
                        break;
                    default:
                        echo 'SGBD NÃO INFORMADO';
                        break;
            }

        endif;

        return self::$pdo;

    }

}