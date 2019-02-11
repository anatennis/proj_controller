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
        $title = 'Матч Live';
        $view = 'gamered_view.php';
        //$teamsinfo = $this->gameModel->getTeams();
        $game_id = explode("/", $_SERVER['REQUEST_URI'])[2];
        $gameinfo = $this->gameModel->getGame($game_id);
        $team1 = $this->gameModel->getTeam($gameinfo[0]['team1']);
        $team2 = $this->gameModel->getTeam($gameinfo[0]['team2']);
        $players1 = $this->gameModel->getPlayers($team1['id']);
        $players2 = $this->gameModel->getPlayers($team2['id']);
        $data = [
            'title'=>$title,
            //'game'=>$gameinfo,
            'team1'=>$team1,
            'team2'=>$team2,
            'players1'=>$players1,
            'players2'=>$players2,
            'game_id'=>$game_id

        ];
        /*parent::generateResponse($view, $data);*/
        if (!isset($_SESSION['login'])) {
            return parent::generateResponse('auth_view.php',
                ['title'=>'Войти', 'warn'=>true]);
        }
        $response = parent::generateResponse($view, $data);
        return $response;
    }

    public function GamesAction() {
        $title = 'Доступные игры';
        $view = 'games_view.php';
        if ($_SESSION['login']=='admin') {
            $games = $this->gameModel->getGamesAdmin();
        } else {
            $games = $this->gameModel->getGames();
        }
        $teams = $this->gameModel->getTeams();
        $data = [
            'title'=>$title,
            'games'=>$games,
            'teams'=>$teams
        ];
        if (!isset($_SESSION['login'])) {
            return parent::generateResponse('auth_view.php',
                ['title'=>'Войти', 'warn'=>true]);
        }
        /*parent::generateResponse($view, $data);*/
        $response = parent::generateResponse($view, $data);
        return $response;
    }

    public function AddGameAction($request) {
        $postData = $request->post();
        $title = 'Доступные игры';
        $view = 'games_view.php';
        $games = $this->gameModel->addGame($postData);
        if ($_SESSION['login']=='admin') {
            $games = $this->gameModel->getGamesAdmin();
        } else {
            $games = $this->gameModel->getGames();
        }
        $data = [
            'title'=>$title,
            'games'=>$games
        ];
        /*parent::generateResponse($view, $data);*/
        $response = parent::generateResponse($view, $data);
        return $response;
    }

    public function AddAction() {
        $title = 'Добавить матч';
        $view = 'add_game.php';
        $teams = $this->gameModel->getTeams();
        $users = $this->gameModel->getUsers();
        //$games = $this->gameModel->getGames();
        $data = [
            'title'=>$title,
            'teams'=>$teams,
            'users'=>$users
        ];
        if (!isset($_SESSION['login'])) {
            return parent::generateResponse('auth_view.php',
                ['title'=>'Войти', 'warn'=>true]);
        }
        /*parent::generateResponse($view, $data);*/
        $response = parent::generateResponse($view, $data);
        return $response;
    }

    public function RecResultAction($request) {
        $postData = $request->post();
        $title = 'Доступные игры';
        $view = 'games_view.php';
        $this->gameModel->addGameResult($postData);
        if ($_SESSION['login']=='admin') {
            $games = $this->gameModel->getGamesAdmin();
        } else {
            $games = $this->gameModel->getGames();
        }
        $data = [
            'title'=>$title,
            'games'=>$games
        ];
        /*parent::generateResponse($view, $data);*/
        $response = parent::generateResponse($view, $data);
        return $response;
    }

    public function showExampleAction() {
        $title = 'Игра Пример';
        $view = 'game_view.php';
        $players1 = $this->gameModel->getPlayers(1);
        $players2 = $this->gameModel->getPlayers(2);
        $data = [
            'title'=>$title,
            'players1'=>$players1,
            'players2'=>$players2
        ];
        $response = parent::generateResponse($view, $data);
        return $response;
    }


}