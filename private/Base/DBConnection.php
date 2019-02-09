<?php

namespace Anastasia\Project\Base;

class DBConnection
{
    private $connection;
    private static $dbconnection;
    /*protected $server = 'localhost';
    protected $db_name = 'project';
    protected $username = 'anastasia',
    $pwd = 'password';*/
    /*public function __construct( )
        {
            $this->connection = $this->connect($this->server, $this->db_name, $this->username, $this->pwd);
        }*/


    private function __construct( )
    {
        //$this->connection = $this->connect($this->server, $this->db_name, $this->username, $this->pwd);
    }

    public static function getDBConnection() {
        if (!self::$dbconnection) {
            self::$dbconnection = new self();
        }
        return self::$dbconnection;
    }

    public function setConnection($settings) {
        $this->connection = $this->connect($settings['server'], $settings['dbname'], $settings['user'], $settings['pwd']);
    }

    private function connect(
        $server, $db_name,
        $username, $pwd, array $opt=[]
    )
    {
        $connection = null;
        try {
            $connection =  new \PDO("mysql:host=$server;dbname=$db_name",
                $username, $pwd, $opt);
        } catch (\PDOException $exception){
            // обработка ошибки
        }
        return $connection;
    }
    // неподготовленный запрос
    public function exec($sql_string){
//        if(!$this->connection->exec($sql_string)){
//            return "Exec Error";
//        }
        return $this->connection->exec($sql_string);
    }
    // неподготовленный запрос
    public function queryAll($sql_string){
        $statement = $this->connection->query($sql_string);
        if (!$statement) {
            return false; // либо сообщение
        }
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    // неподготовленный запрос
    public function query($sql_string){
        $statement = $this->connection->query($sql_string);
        if (!$statement) {
            return false; // либо сообщение
        }
        return $statement->fetch(\PDO::FETCH_ASSOC);
    }
    // подготовленный запрос
    public function execute($sql_string, $params, $all=true){
        $statement = $this->connection->prepare($sql_string);
        $statement->execute($params);
        if (!$all) {
            return $statement->fetch(\PDO::FETCH_ASSOC);
        }
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}