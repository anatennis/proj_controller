<?php
/**
 * Created by PhpStorm.
 * User: Anastasia
 * Date: 01.02.2019
 * Time: 20:16
 */

namespace Anastasia\Project\Models;


class IndexModel
{
    const USER_ADDED = "USER_ADDED";
    const USER_EXISTS = "USER_EXISTS";
    const LOGIN_ERROR = "LOGIN_ERROR";
    const PWD_ERROR = "PWD_ERROR";
    const USER_AUTH = "USER_AUTH";
    const DB_ERROR = "DB_ERROR";
    private $db;

    public function getGames() {
        /*$db = DBConnection::getDBConnection();
        $sql = 'SELECT * FROM Games';
        $games = $db->exec($sql);*/
        $games = [
            '1' => [
                'team1' => "GASU",
                'team2' => "LTU",
                'logo1' => "l.png",
                'logo2' => "w.png"
            ]
        ];
        return $games;
    }
}