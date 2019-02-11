<?php
/**
 * Created by PhpStorm.
 * User: Anastasia
 * Date: 09.02.2019
 * Time: 21:19
 */

namespace Anastasia\Project\Models;
use Anastasia\Project\Base\DBConnection;


class CommonModel
{
    private $db;
    public function __construct()
    {
        $this->db = DBConnection::getDBConnection();
    }

    public function getUsers() {
        $sql = "SELECT * FROM User";
        $players = $this->db->queryAll($sql);
        return $players;
    }

    public function getGames() {
        $sql = "SELECT * FROM Game";
        $players = $this->db->queryAll($sql);
        return $players;
    }

    public function sendMessage($mes_data) {
        $sql = "INSERT INTO Message (name, email, login, message, date)
              VALUES (:name, :email, :login, :message, :date)";
        $params = [
            'name'=>$mes_data['name'],
            'email'=>$mes_data['email'],
            'login'=>$_SESSION['login'],
            'message'=>$mes_data['message'],
            'date'=>$mes_data['date']
        ];
        /*if($this->db->execute($sql, $params) === false) {
            return self::DB_ERROR;
        }*/
        $answer = $this->db->execute($sql, $params);
        return $answer;
    }
}