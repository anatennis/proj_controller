<?php

namespace Anastasia\Project\Controllers;
use Anastasia\Project\Base\Controller;
use Anastasia\Project\Models\NewsModel;

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
        /*parent::generateResponse($view, $data);*/
        $response = parent::generateResponse($view, $data);
        return $response;
    }
}