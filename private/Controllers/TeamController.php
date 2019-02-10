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
        $teams = $this->teamModel->getPlayers();
        $teams_json = json_encode($teams);
        return parent::generateAjaxResponse($teams_json);
    }

}