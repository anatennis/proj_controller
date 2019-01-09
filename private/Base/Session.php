<?php

namespace Anastasia\Project\Base;

class Session
{
    protected function LoadSession()
    {
        session_start();
    }

    public function get($name)
    {
        if (!isset($_SESSION[$name])) {
            var_dump("$name не найден");
            return false;
        }
        return $_SESSION[$name];
    }

    public function set($name, $value)
    {
        if (!$name or !$value) {
            var_dump("uncorrect $value or $name");
            return false;
        }
        $_SESSION[$name] = $value;
    }

    public function destroySession($name) {
        session_destroy($name);
    }

}