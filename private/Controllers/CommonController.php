<?php
/**
 * Created by PhpStorm.
 * User: Anastasia
 * Date: 09.02.2019
 * Time: 21:17
 */

namespace Anastasia\Project\Controllers;
use Anastasia\Project\Base\Controller;
use Anastasia\Project\Models\CommonModel;


class CommonController extends Controller
{
    private $commonModel;

    public function __construct()
    {
        $this->commonModel = new CommonModel();
    }


    public function usersAction(){
        $view = 'users_view.php';
        $title =  "Пользователи";
        $users = $this->commonModel->getUsers();
        $games = $this->commonModel->getGames();
        $data = [
            'title' => $title,
            'users' => $users,
            'games' => $games
        ];
        if ($_SESSION['login'] !== 'admin') {
            if (!isset($_SESSION['login'])) {
                return parent::generateResponse('auth_view.php',
                    ['title'=>'Войти', 'warn'=>true]);
            }
            return parent::generateResponse('contacts_view.php',
                ['title'=>'Контакты']);
        }
        return parent::generateResponse($view, $data);
    }

    public function contactsAction(){
        $view = 'contacts_view.php';
        $title =  "Контакты";
        $data = [
            'title' => $title
        ];
        return parent::generateResponse($view, $data);
    }

    public function messageAction($request){
        $postData = $request->post();
        $view = 'messageaccept_view.php';
        $title =  "Контакты";
        $this->commonModel->sendMessage($postData);
        $data = [
            'title' => $title
        ];
//        if (!isset($_SESSION['login'])) {
//            return parent::generateResponse('auth_view.php',
//                ['title'=>'Войти', 'warn'=>true]);
//        }
        return parent::generateResponse($view, $data);
    }

    public function messagesAction(){
        $view = 'messages_view.php';
        $title =  "Сообщения";
        $messages = $this->commonModel->getMessages();
        $data = [
            'title' => $title,
            'messages' => $messages
        ];
        if ($_SESSION['login'] !== 'admin') {
            if (!isset($_SESSION['login'])) {
                return parent::generateResponse('auth_view.php',
                    ['title'=>'Войти', 'warn'=>true]);
            }
            return parent::generateResponse('contacts_view.php',
                ['title'=>'Контакты']);
        }
        return parent::generateResponse($view, $data);
    }


}