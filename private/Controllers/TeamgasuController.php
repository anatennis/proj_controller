<?php
namespace Anastasia\Project\Controllers;
use Anastasia\Project\Base\Controller;
use Anastasia\Project\Models\TeamgasuModel;

class TeamgasuController extends Controller
{
    private $teamgasuModel;

    public function __construct()
    {
        $this->teamgasuModel = new TeamgasuModel();
    }
    public function TeamgasuAction() {
        $title = 'Лисы СПбГАСУ';
        $view = 'teamgasu_view.php';
        $goalies = $this->teamgasuModel->getGoalies();
        $data = [
            'title'=>$title,
            'goalies'=>$goalies
        ];
        parent::generateResponse($view, $data);
    }

}

//game
//team
//player
//news
//tournament
//account
//search