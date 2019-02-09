<?php
/**
 * Created by PhpStorm.
 * User: Anastasia
 * Date: 07.01.2019
 * Time: 18:27
 */

namespace Anastasia\Project\Models;
use Anastasia\Project\Base\DBConnection;

class GameModel
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


    public  function getGame($game_id) {
        $sql = "SELECT * FROM Game WHERE id=:id";
        $params = [
            'id'=> $game_id
        ];
        return $this->db->execute($sql, $params);
    }

    public  function getGames() {
        $sql = "SELECT * FROM Game WHERE id_user=:id_user";
        $params = [
            'id_user'=> $_SESSION['login_id']
        ];
        $games = $this->db->execute($sql, $params);
        return $games;
    }

    public  function getGamesAdmin() {
        $sql = "SELECT * FROM Game";
        return $this->db->queryAll($sql);
    }


    public function getTeam($team) {
        $sql = "SELECT * FROM Team WHERE name=:name";
        $params = [
            'name'=> $team
        ];
        $team = $this->db->execute($sql, $params, false);
        return $team;
    }

    public function getTeams() {
        $sql = "SELECT * FROM Team";
        $statement = $this->db->queryAll($sql);
        $teams = $statement;
        return $teams;
    }

    public function getPlayers($team_id) {
        $sql = "SELECT * FROM Player WHERE team_id=:team_id";
        $params = [
            'team_id'=> $team_id
        ];
        $team = $this->db->execute($sql, $params);
        return $team;
    }

    public function getUsers() {
        $sql = "SELECT * FROM User";
        $statement = $this->db->queryAll($sql);
        $users = $statement;

        return $users;
    }

    public function addGame($gameData) {
        $sql = "SELECT id FROM User WHERE name=:name";
        $params = [
            'team1'=>$gameData['user']
        ];
        $user_id = $this->db->execute($sql, $params);

        $sql = "INSERT INTO Game (team1, team2, id_user)
              VALUES (:team1, :team2, :id_user)";
        $params = [
            'team1'=>$gameData['team1'],
            'team2'=>$gameData['team2'],
            'id_user'=>$user_id
        ];
        /*if($this->db->execute($sql, $params) === false) {
            return self::DB_ERROR;
        }*/
        return $this->db->execute($sql, $params);
    }

    public function getGoalsTeam1() {
        return;
    }

    public function getGoalsTeam2() {
        return;
    }

    public function getFallsTeam1() {
        return;
    }

    public function getFallsTeam2() {
        return;
    }
}