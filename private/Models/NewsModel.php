<?php
namespace Anastasia\Project\Models;
use Anastasia\Project\Base\DBConnection;
class NewsModel
{
    const USER_ADDED = "USER_ADDED";
    const USER_EXISTS = "USER_EXISTS";
    const LOGIN_ERROR = "LOGIN_ERROR";
    const PWD_ERROR = "PWD_ERROR";
    const USER_AUTH = "USER_AUTH";
    const DB_ERROR = "DB_ERROR";
    private $db;


    public function showNews(){
        $db = new DBConnection();
        $sql = 'SELECT Name FROM News';
        $news = $db->exec($sql);
       return $news;
    }

    public function getIntNews() {

        $intnews = [
            [
                "title" => "Новость1",
                "info"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Maecenas ullamcorper convallis quam, nec suscipit nunc eleifend nec."
            ],
            [
                "title" => "Новость2",
                "info"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Maecenas ullamcorper convallis quam, nec suscipit nunc eleifend nec."
            ],
            [
                "title" => "Новость3",
                "info"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Maecenas ullamcorper convallis quam, nec suscipit nunc eleifend nec."
            ],
            [
                "title" => "Новость4",
                "info"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Maecenas ullamcorper convallis quam, nec suscipit nunc eleifend nec."
            ],
        ];
        return $intnews;
    }

    public function getLocNews() {

        $locnews = $this->showNews();

        $locnews = [
            [
                "title" => "Loc_Новость_1",
                "info"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Maecenas ullamcorper convallis quam, nec suscipit nunc eleifend nec."
            ],
            [
                "title" => "Loc_Новость_2",
                "info"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Maecenas ullamcorper convallis quam, nec suscipit nunc eleifend nec."
            ],
            [
                "title" => "Loc_Новость_3",
                "info"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Maecenas ullamcorper convallis quam, nec suscipit nunc eleifend nec."
            ],
            [
                "title" => "Loc_Новость_4",
                "info"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Maecenas ullamcorper convallis quam, nec suscipit nunc eleifend nec."
            ],
            [
                "title" => "Loc_Новость_5",
                "info"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Maecenas ullamcorper convallis quam, nec suscipit nunc eleifend nec."
            ],
            [
                "title" => "Loc_Новость_6",
                "info"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Maecenas ullamcorper convallis quam, nec suscipit nunc eleifend nec."
            ]
        ];
        return $locnews;
    }
}