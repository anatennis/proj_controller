<?php
/**
 * Created by PhpStorm.
 * User: Anastasia
 * Date: 01.02.2019
 * Time: 17:50
 */

namespace Anastasia\Project\Models;
//use Anastasia\Project\Models;
use Anastasia\Project\Base\DBConnection;




class AccountModel
{
    const USER_ADDED = "USER_ADDED";
    const USER_EXISTS = "USER_EXISTS";
    const LOGIN_ERROR = "LOGIN_ERROR";
    const PWD_ERROR = "PWD_ERROR";
    const USER_AUTH = "USER_AUTH";
    const DB_ERROR = "DB_ERROR";
    private $db;
    public function __construct()
    {
        $this->db = DBConnection::getDBConnection();
    }
    public function loginExists($userData){
        $sql = 'SELECT login FROM user WHERE login =:login';
        $params = ['login'=>$userData['login']];

        $statement = $this->db->execute($sql, $params);
        $answer = $statement;

       /* $statement = $this->db->prepare($sql);
        $statement->execute($params);
        $answer = $statement->fetch(\PDO::FETCH_ASSOC);*/
        return $answer;
    }
    public function addUser($userData){
        if ($this->loginExists($userData)){
            return self::USER_EXISTS;
        }
        $sql = "INSERT INTO User (login, password, name, email)
              VALUES (:login, :password, :name, :email)";
        $params = [
            'login'=>$userData['login'],
            'password'=>password_hash($userData['password'], PASSWORD_DEFAULT),
            'name'=>$userData['name'],
            'email'=>$userData['email'],
        ];
        if($this->db->execute($sql, $params) === false) {
            return self::DB_ERROR;
        }
        return self::USER_ADDED;
    }
    public function authUser($userData){
        $sql = "SELECT login, password FROM User 
      WHERE login=:login";
        $params = [
            'login'=> $userData['login']
        ];
       // $statement = $this->db->prepare($sql);
        $statement = $this->db->execute($sql, $params);
        //$statement->execute($params);
        //$answer = $statement->fetch(\PDO::FETCH_ASSOC);
        $answer = $statement;
        if (!$answer){
            return self::LOGIN_ERROR;
        }
        $hash = $answer['password'];
//        if (!password_verify($userData['pwd'], $hash)){
//            return self::PWD_ERROR;
//        }
        return self::USER_AUTH;
    }

    public function getId() {
        $sql = "SELECT id FROM User WHERE login=:login";
        $params = [
            'login'=> $_SESSION['login']
        ];
        return $this->db->execute($sql, $params, false);

    }
}