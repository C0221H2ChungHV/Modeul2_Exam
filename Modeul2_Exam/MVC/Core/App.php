<?php


class App
{
    protected $controller = "ProductController";
    protected $action = "displaylist";
    protected $param = [];

    public function __construct()
    {
        $route = $this->urlProcess();
        if (isset($route[0])) {
            if (file_exists("MVC/Controllers/" . $route[0] . ".php")) {
                $this->controller = $route[0];
                unset($route[0]);
            }
        }
        require_once "MVC/Controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        if (isset($route[1])) {
            if (method_exists($this->controller, $route[1])) {
                $this->action = $route[1];
                unset($route[1]);
            }
        }

        if (!empty($route)) {
            $this->param = $route;
        }

        call_user_func_array([$this->controller, $this->action], $this->param);
    }

    public function urlProcess()
    {
        if (isset($_GET["url"])) {
            return explode("/", trim($_GET["url"]));
        }
    }
}

