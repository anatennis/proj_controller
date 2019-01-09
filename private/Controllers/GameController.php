<?php
/**
 * Created by PhpStorm.
 * User: Anastasia
 * Date: 07.01.2019
 * Time: 18:26
 */

namespace Anastasia\Project\Controllers;
use Anastasia\Project\Base\Controller;
use Anastasia\Project\Models\GameModel;

class GameController extends Controller
{
    private $gameModel;

    public function __construct()
    {
        $this->gameModel = new GameModel();
    }
    public function GameAction() {
        $title = 'Матч '.$this->gameModel->getTeams()['team1']['name'].' - '.$this->gameModel->getTeams()['team2']['name'];
        $view = 'game_view.php';
        $teamsinfo = $this->gameModel->getTeams();
        $gameinfo = $this->gameModel->getGame();
        $team1goals = $this->gameModel->getGoalsTeam1();
        $team2goals = $this->gameModel->getGoalsTeam2();
        $team1falls = $this->gameModel->getFallsTeam1();
        $team2falls = $this->gameModel->getFallsTeam2();
        $data = [
            'title'=>$title,
            'game'=>$gameinfo,
            'team1'=>$teamsinfo['team1'],
            'team2'=>$teamsinfo['team2'],
            'team1goals'=>$team1goals,
            'team2goals'=>$team2goals,
            'team1falls'=>$team1falls,
            'team2falls'=>$team2falls
            /*'intnews'=>$intnews,
            'locnews'=>$locnews*/
        ];
        /*parent::generateResponse($view, $data);*/
        $response = parent::generateResponse($view, $data);
        return $response;
    }

}