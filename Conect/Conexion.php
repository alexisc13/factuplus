<?php
namespace Conect;

 date_default_timezone_set('America/Lima'); 
 class Conexion{
      
        const HOST = '64.23.178.172';
        const USER = 'eldoctor_factu';
        const PASSWORD = 'R82g3uuZO9kzl';
        const BDNAME = 'eldoctor_facturador';
    public static function conectar() {
       
        $link = new \PDO("mysql:host=".self::HOST."; dbname=".self::BDNAME.";",
                        self::USER, self::PASSWORD);
        $link->exec("set names utf8");
        return $link;
    }
}

