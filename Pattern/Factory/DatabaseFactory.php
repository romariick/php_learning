<?php

require_once 'MysqlDb.php';
require_once 'PgSql.php';

class DatabaseFactory
{
    public static function create($type)
    {
        switch ($type) {
        case "mysql":
            $db = new MysqlDb();
            break;
        case "pgsql":
            $db = new PgSql();
            break;
        }

        return $db;
    }
}
