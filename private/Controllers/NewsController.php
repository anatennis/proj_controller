<?php
/**
 * Created by PhpStorm.
 * User: Anastasia
 * Date: 16.12.2018
 * Time: 14:01
 */

class NewsController extends Controller
{

    private $newsModel;

    public function __construct()
    {
        $this->newsModel = new NewsModel();
    }
    public function NewsAction() {
        $title = 'Новости СХЛ СПб';
        $view = 'news_view.php';
        $intnews = $this->newsModel->getIntNews();
        $locnews = $this->newsModel->getLocNews();
        $data = [
            'title'=>$title,
            'intnews'=>$intnews,
            'locnews'=>$locnews
        ];
        parent::generateResponse($view, $data);
    }
}