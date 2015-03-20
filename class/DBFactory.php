<?php

class DBFactory
{
    public static function getMysqlConnexionWithPDO()
    {
        $db = new PDO("mysql:host=mysql1.alwaysdata.net;dbname=canargot_bdd", "canargot", "canargot");

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("SET CHARACTER SET utf8");
        return $db;
    }

    public static function getMysqlConnexionWithMySQLi()
    {
        return new MySQLi('mysql1.alwaysdata.net', 'canargot_bdd', 'canargot', 'canargot');
    }
}