<?php
require_once 'vendor/autoload.php';

$server = \Ratchet\Server\IoServer::factory(
    new \Ratchet\Http\HttpServer(
        new Ratchet\WebSocket\WsServer(
            new \Anastasia\Project\Base\Socket()
        )
    ), 8080
);

$server->run();