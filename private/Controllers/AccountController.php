<?php
/**
 * Created by PhpStorm.
 * User: BB
 * Date: 27.12.2018
 * Time: 12:28
 */

namespace Anastasia\Project\Controllers;
use Anastasia\Project\Base\Controller;
use Anastasia\Project\Base\Session;
use Anastasia\Project\Models\AccountModel;

class AccountController extends Controller
{
    private $accountModel;
    private $session;
    public function __construct()
    {
        $this->accountModel = new AccountModel();
    }
    public function accountAction(){
        $view = 'auth_view.php';
        $title =  "Аккаунт";
        $data = [
            'title' => $title,
            'warnpwd'=>$_SESSION['warnpwd']
        ];
        $_SESSION['warnpwd'] = false;
        return parent::generateResponse($view, $data);
    }

    public function authAction($request){

        $postData = $request->post(); // массив $_POST
        $answer = $this->accountModel->authUser($postData);
        if ($answer == 'USER_AUTH') {
            $_SESSION['login'] = $postData['login'];
            $_SESSION['login_id'] =$this->accountModel->getId()['id'];
            $_SESSION['warnpwd'] = false;
        } else {
            $_SESSION['warnpwd'] = true;
        }
        return parent::generateAjaxResponse($answer);
    }

    public function authAction2($request){
        $view = 'account_view.php';
        $title =  "Личный кабинет";
        $data = [
            'title' => $title
        ];
        if (!isset($_SESSION['login'])) {
            return parent::generateResponse('auth_view.php',
                ['title'=>'Войти', 'warn'=>true]);
        }
        return parent::generateResponse($view, $data);
    }


    public function registrationAction($request){
        $postData = $request->post(); // массив $_POST
        $answer = $this->accountModel->addUser($postData);
        return parent::generateAjaxResponse($answer);
    }

    public function registrationAction2(){
        $view = 'account_view.php';
        $title =  "Личный кабинет";
        $reg_success =  true;
        $data = [
            'title' => $title,
            'reg_success'=>$reg_success,
            //'user_exists'=>$user_exists
        ];
        if (!isset($_SESSION['login'])) {
            return parent::generateResponse('auth_view.php',
                ['title'=>'Войти', 'warn'=>true]);
        }
        return parent::generateResponse($view, $data);
        //return parent::generateAjaxResponse($answer);
    }

    public function logoutAction(){
        session_destroy();
        unset($_SESSION['login']);
        $view = 'auth_view.php';
        $title =  "Войти";
        $data = [
            'title' => $title
        ];
        return parent::generateResponse($view, $data);
    }
}