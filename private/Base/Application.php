<?php
/**
 * Created by PhpStorm.
 * User: Anastasia
 * Date: 27.12.2018
 * Time: 21:26
 */

namespace Anastasia\Project\Base;

class Application
{
    private $config;
    public function __construct($config)
    {
        $this->config = $this->loadConfig($config);
    }
    private function loadConfig($configPath)
    {
        if (!is_readable($configPath)) {
            var_dump("not readable");
        }
        return $config = json_decode(file_get_contents($configPath), true);
    }
    public function handleRequest(Request $request){
        $dbconf =  $this->config['db'];
        $db = DBConnection::getDBConnection();
        $db->setConnection($this->config['db']);
//через singleton (приватным контсруктор, два метода - один статитческий для создания объекта и другой для задания настроек конфигураций)
        $router = new Router($this->config['urls']);
        $routeInfo = $router->dispatch($request->getMethod(), $request->getUri());
        $controllerData = Controller::create($routeInfo);
        $request->setParams($controllerData[1]);
        $response = call_user_func_array($controllerData[0], [$request]);
        if (!$response instanceof Response) {
            throw new \LogicException('The controller must return the response object.');
        }
        return $response;
    }
}