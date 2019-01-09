<?php
/**
 * Created by PhpStorm.
 * User: Anastasia
 * Date: 07.01.2019
 * Time: 18:27
 */

namespace Anastasia\Project\Models;


class GameModel
{
    public  function getGame() {
        $game = [
            'result'=>'2:7',
            'date'=>'12.12.18'
        ];

        return $game;
    }
    public function getTeams() {
        $teams = [
                'team1' => [
                'name' => 'A',
                'rshots' => 93.5,
                'shots'=> 34,
                'fminutes' => 12,
                'logo' => 'shlspb.png'
                ],
            'team2' => [
                'name' => 'B',
                'rshots' => 92.5,
                'shots'=> 42,
                'fminutes' => 10,
                'logo' => 'shlspb.png'
            ]
        ];

        return $teams;
    }

    public function getGoalsTeam1() {
        $team1goals = [
            [
                'number'=>'1',
                'date'=>'12:33',
                'goal'=>'Петров А',
                'assist1'=>'Сидоров С',
                'assist2'=>'Кадрин К'
            ],
            [
                'number'=>'2',
                'date'=>'16:33',
                'goal'=>'Сирин В',
                'assist1'=>'Рамкин Р',
                'powplay'=>'+1'
            ],
            [
                'number'=>'3',
                'date'=>'42:33',
                'goal'=>'Петров А',
            ],
        ];

        return $team1goals;
    }

    public function getGoalsTeam2() {
        $team2goals = [
            [
                'number'=>'1',
                'date'=>'28:33',
                'goal'=>'Рифин П',
                'assist1'=>'Тунин Р'
            ]
        ];

        return $team2goals;
    }

    public function getFallsTeam1() {
        $team1falls = [
            [
                'name'=>'Рифин П',
                'date'=>'22:33',
                'dur'=>'2 мин',
                'typeoff'=>'ЗД-КЛ'
            ]
        ];

        return $team1falls;
    }

    public function getFallsTeam2() {
        $team2falls = [
            [
                'name'=>'Пилин Р',
                'date'=>'32:33',
                'dur'=>'2 мин',
                'typeoff'=>'БЛОК'
            ]
        ];
        return $team2falls;
    }
}