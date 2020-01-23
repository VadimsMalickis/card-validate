<?php
/**
 * Created by IntelliJ IDEA.
 * User: ann
 * Date: 1/18/20
 * Time: 10:35 PM
 */
namespace vendor;
class Request
{
    public $params = [];
    public $controller;
    public $action;
    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @return mixed|string
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return mixed|string
     */
    public function getAction()
    {
        return $this->action;
    }


    public function __construct()
    {
        $requestUri = explode('/', trim($_SERVER['REQUEST_URI'],'/'));
        $this->controller = ucfirst(array_shift(explode('?',array_shift($requestUri)))) ?? 'Index';
        $this->action = array_shift( explode('?',$requestUri)) ?? 'index';
        $this->params = $_REQUEST;
    }


}