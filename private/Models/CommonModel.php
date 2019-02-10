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
}