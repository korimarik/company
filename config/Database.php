<?php
/**
 * Created by PhpStorm.
 * User: Dimitrie.M
 * Date: 12.04.2017
 * Time: 15:54
 */

require_once 'MyPDOStatment.php';

class Database
{
    protected static $instance = null;
    final private function __construct() {}
    final private function __clone() {}
    public static function instance()
    {
        if (self::$instance === null)
        {
            $opt  = array(
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => TRUE,
                PDO::ATTR_STATEMENT_CLASS    => array('myPDOStatement'),
            );
            $dsn = 'mysql:host=127.0.0.1:3310;dbname=company;charset=utf8';
            self::$instance = new PDO($dsn, 'root', '', $opt);
        }
        return self::$instance;
    }
    public static function __callStatic($method, $args) {
        return call_user_func_array(array(self::instance(), $method), $args);
    }
}