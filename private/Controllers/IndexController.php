<?php
/**
 * Created by PhpStorm.
 * User: Anastasia
 * Date: 01.02.2019
 * Time: 20:17
 */

namespace Anastasia\Project\Controllers;
use Anastasia\Project\Base\Controller;
use Anastasia\Project\Models\IndexModel;


class IndexController extends Controller
{
    private $indexModel;

    public function __construct()
    {
        $this->indexModel = new IndexModel();
    }
    public function indexAction() {
        $title = "Главная";
        $view = 'account_view.php';
        //$games = $this->indexModel->getGames();
        $data = [
            'title'=>$title,
            'reg'=>$_SESSION['reg']
        ];
        $_SESSION['reg'] = false;

        if (!isset($_SESSION['login'])) {
            return parent::generateResponse('auth_view.php',
                ['title'=>'Войти', 'warn'=>true]);
        }
        /*parent::generateResponse($view, $data);*/
        return parent::generateResponse($view, $data);

    }

}