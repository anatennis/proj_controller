<?php
/**
 * Created by PhpStorm.
 * User: Anastasia
 * Date: 09.01.2019
 * Time: 18:21
 */

namespace Anastasia\Project\Controllers;
use Anastasia\Project\Base\Controller;
use Anastasia\Project\Models\TournamentModel;

class TournamentController extends Controller
{
    private $tournamentModel;
    public function __construct()
    {
        $this->tournamentModel = new TournamentModel();
    }
    public function TournamentAction() {
        $title = 'Турнир';
        $view = 'tournament_view.php';
        $data = [
            'title'=>$title,
        ];

        $response = parent::generateResponse($view, $data);
        return $response;
    }

}