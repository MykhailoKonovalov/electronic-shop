<?php

namespace Database;

use PDO;

class Database
{
    private static $instance = null;
    private $conn;

    private string $host;
    private string $user;
    private string $pass;
    private string $name;

    private function __construct()
    {
        $this->host = $_ENV['MYSQL_HOST'];
        $this->name = $_ENV['MYSQL_DATABASE'];
        $this->user = $_ENV['MYSQL_USER'];
        $this->pass = $_ENV['MYSQL_PASSWORD'];
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $this->conn = new PDO(
            "mysql:host=$this->host;dbname=$this->name;charset=utf8",
            $this->user,
            $this->pass,
            $options
        );
    }

    public static function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->conn;
    }
}
