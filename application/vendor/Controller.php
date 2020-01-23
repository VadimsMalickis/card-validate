<?php
/**
 * Created by IntelliJ IDEA.
 * User: ann
 * Date: 1/19/20
 * Time: 12:25 AM
 */

namespace vendor;


class Controller
{
    public $request;
    public $response;

    /**
     * Controller constructor.
     * @param $request
     * @param $response
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

}