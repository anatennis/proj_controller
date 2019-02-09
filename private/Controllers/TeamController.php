<?php

namespace Anastasia\Project\Controllers;
use Anastasia\Project\Base\Controller;
use Anastasia\Project\Models\TeamModel;

class TeamController extends Controller
{
    private $teamModel;

    public function __construct()
    {
        $this->teamModel = new TeamModel();
    }

    public function getAllAction() {
       /* $game_id = explode("/", $_SERVER['REQUEST_URI'])[2];
        $gameinfo = $this->teamModel->getGame($game_id);
        $team1 = $this->teamModel->getTeams($gameinfo[0]['team1']);
        $team2 = $this->teamModel->getTeams($gameinfo[0]['team2']);*/
        $teams = $this->teamModel->getPlayers();
        $teams_json = json_encode($teams);
        return parent::generateAjaxResponse($teams_json);
    }

}