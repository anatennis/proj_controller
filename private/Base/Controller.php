<?php
/**
 * Created by PhpStorm.
 * User: Anastasia
 * Date: 16.12.2018
 * Time: 14:00
 */

class Controller
{
    public function  generateResponse($view, array $data, $template = 'template_view.php')
    {
        extract($data);
        require_once __DIR__.'/../Views/'.$template;
    }
}