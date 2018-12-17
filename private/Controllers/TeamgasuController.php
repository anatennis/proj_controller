<?php
/**
 * Created by PhpStorm.
 * User: Anastasia
 * Date: 16.12.2018
 * Time: 15:56
 */

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