<?php

class DBFactory
{
    public static function getMysqlConnexionWithPDO()
    {
        $db = new PDO("mysql:host=duplicatnkbdd.mysql.db;dbname=duplicatnkbdd", "duplicatnkbdd", "2hc97zk4924A");

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("SET CHARACTER SET utf8");
        return $db;
    }

    public static function getMysqlConnexionWithMySQLi()
    {
        return new MySQLi('duplicatnkbdd.mysql.db', 'duplicatnkbdd', '2hc97zk4924A', 'duplicatnkbdd');
    }
}