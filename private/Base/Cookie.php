<?php
/**
 * Created by PhpStorm.
 * User: Anastasia
 * Date: 20.12.2018
 * Time: 21:16
 */

namespace Anastasia\Project\Base;


class Cookie
{
    /*Cookie name - the name of the cookie     */
    private $name = false;
    private $value = "";
    /*Cookie life time*/
    private $time;
    /*Cookie domain*/
    private $domain = false;
    /*Cookie path*/
    private $path = false;

    public function __construct() { }

    public function createCookie() {
        return setcookie($this->name, $this->getValue(), $this->getTime(), $this->getPath(), $this->getDomain());
    }

    public function getCookie(){
        return $_COOKIE[$this->getName()];
    }

    public function deleteCookie(){
        return setcookie($this->name, '', time() - 3600, $this->getPath(), $this->getDomain());
    }

    public function setDomainCookie($domain) {
        $this->domain = $domain;
    }

    public function getDomainCookie() {
        return $this->domain;
    }

    public function setNameCookie($id) {
        $this->name = $id;
    }

    public function getNameCookie() {
        return $this->name;
    }

    public function setPathCookie($path) {
        $this->path = $path;
    }

    public function getPathCookie() {
        return $this->path;
    }

    public function setTimeCookie($time) {
        $date = new DateTime();
        $date->modify($time);
        $this->time = $date->getTimestamp();
    }

    public function getTimeCookie() {
        return $this->time;
    }

    public function setValueCookie($value) {
        $this->value = $value;
    }

    public function getValueCookie() {
        return $this->value;
    }


}