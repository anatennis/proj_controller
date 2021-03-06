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
        $players = $this->db->queryAll($sql);
        return $players;
    }
}