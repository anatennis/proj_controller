<?php
/**
 * Created by PhpStorm.
 * User: Anastasia
 * Date: 07.02.2019
 * Time: 19:05
 */

namespace Anastasia\Project\Models;
use Anastasia\Project\Base\DBConnection;


class TeamModel
{
    private $db;

    public function __construct()
    {
        $this->db = DBConnection::getDBConnection();
    }

    public  function getPlayers() {
        $sql = "SELECT * FROM Player";
        return $this->db->queryAll($sql);
    }
    /* public  function getGame($game_id) {
       $sql = "SELECT * FROM Game WHERE id=:id";
        $params = [
            'id'=> $game_id
        ];
        return $this->db->execute($sql, $params);
    }
    public function getTeams($team) {
        $sql = "SELECT * FROM Team WHERE name=:name";
        $params = [
            'name'=> $team
        ];
        $team = $this->db->execute($sql, $params, false);
        return $team;
    }

    public function getTeam($id1, $id2){
        $sql = "SELECT * FROM Player WHERE team_id=:id1 OR team_id=:id2";
        $params = [
            'id1'=> $id1,
            'id2'=> $id2,
        ];
        $team = $this->db->execute($sql, $params, false);
        return $team;

    }*/
}