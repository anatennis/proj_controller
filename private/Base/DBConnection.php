<?php

namespace Anastasia\Project\Base;

class DBConnection
{
    private $connection;

    public function __construct()
    {
        $this->connection = $this->connect();
    }

    public function connect($server, $db_name, $username, $pwd, array $opt=[]) {

        try {
            $connection = new \PDO("mysql:host=$server;dbname=$db_name",
            $username, $pwd, $opt);
        } catch (\PDOException $exception) {
            //обработка ошибки
        }

        return $connection;
    }

    public function exec($sql_string) {
        //
       /* if (!$this->connection->exec($sql_string)) {
            return "Exc error";
        }*/
        return $this->connection->exec($sql_string);
    }

    //неподготовленный завпрос
    public function queryAll($sql_string) {
        $statement = $this->connection->query($sql_string);
        $data = $statement->fetchAll(\PDO::FETCH_ASSOC);
        var_dump($data);
    }

    public function query($sql_string) {
        $statement = $this->connection->query($sql_string);
        $data = $statement->fetch(\PDO::FETCH_ASSOC);
        var_dump($data);
    }

    //подготовленный запрос
    /*public function execute($sql_string, $params, $all=true) {
        $statement = $this->connection->prepare($sql_string);
        $statement->execute($params);
    if (!$all)
    {return $statement->fetchAll(\PDO::FETCH_ASSOC);}
    `
    return  $statement->fetch(\PDO::FETCH_ASSOC);
    }*/



}