<?php
namespace App\Connection;
use PDO;
use PDOException;

class Database
{
    private static $instance = null;
    public function __construct() {}
    public static function getInstance(){
        if(!self::$instance){
            $config = require_once __DIR__ . '/../../config/database.php';
            $dsn = $config['driver'] . ':host=' . $config['host'] . ';dbname=' . $config['database'];
            try {
                self::$instance = new PDO($dsn, $config['username'], $config['password']);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return self::$instance;
    }
}