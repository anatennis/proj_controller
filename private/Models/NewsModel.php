<?php
namespace Anastasia\Project\Models;

class NewsModel
{
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