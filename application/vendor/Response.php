<?php
/**
 * Created by IntelliJ IDEA.
 * User: ann
 * Date: 1/18/20
 * Time: 10:32 PM
 */
namespace vendor;
class Response
{
    public function __construct()
    {
        header("Access-Control-Allow-Orgin: *");
        header("Access-Control-Allow-Methods: *");
        header("Content-Type: application/json");
    }

    public function response($data = [], $status = 500) {
        header("HTTP/1.1 " . $status . " " . $this->getStatus($status));
        return json_encode($data);
    }

    private function getStatus($code) {
        $status = array(
            200 => 'OK',
            400 => 'Bad request',
            404 => 'Not found',
            500 => 'Internal Server Error',
        );
        return ($status[$code]) ?? $status[500];
    }

}