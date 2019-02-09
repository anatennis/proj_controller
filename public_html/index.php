<?php
require __DIR__.'/../vendor/autoload.php';
session_start();
$request = new \Anastasia\Project\Base\Request();
$file = __DIR__.'/../config.json';
$app = new \Anastasia\Project\Base\Application($file);
$response = $app->handleRequest($request);  // обрабатываем запрос
$response->send();
