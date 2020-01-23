<?php
/**
 * Created by IntelliJ IDEA.
 * User: ann
 * Date: 1/18/20
 * Time: 9:00 PM
 */
namespace vendor;
class Router
{
    public function route(Request $request, Response $response){
        $class = "controllers\\".$request->getController();
        if(!file_exists( realpath(__DIR__ . '/../controllers/'.$request->getController().'.php'))){
           $response->response('Not found', 404);
        }
        $controller = new $class($request, $response);
        $action = $request->getAction();
        if($controller && method_exists($controller, $action)){
            $controller->$action();
        }else{
            $response->response('Error', 400);
        }
    }

}