<?php
namespace Anastasia\Project\Models;

class TeamgasuModel
{
    public function getGoalies() {
        $goalkeepers = [
            [
                'id' => 1,
                'name' => 'Журин Илья',
                'img1' => 'ж2.jpg',
                'img2' => 'журин.png'
            ],
            [
                'id' => 2,
                'name' => 'Николай Соловьев',
                'img1' => 's2.jpg',
                'img2' => 'журин.png'
            ],

        ];

        return $goalkeepers;
    }
}