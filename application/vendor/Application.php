<?php
/**
 * Created by IntelliJ IDEA.
 * User: ann
 * Date: 1/18/20
 * Time: 10:36 PM
 */
namespace vendor;
class Application
{
    public $request;
    public $response;
    public $router;

    /**
     * Application constructor.
     * @param $request
     * @param $response
     * @param $router
     */
    public function __construct(Request $request = null, Response $response = null, Router $router = null)
    {
        $this->request = $request ?? new Request();
        $this->response = $response ?? new Response();
        $this->router = $router ?? new Router();
    }

    public function run(){
        $this->router->route($this->request, $this->response);
    }
}