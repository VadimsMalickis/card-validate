<?php
/**
 * Created by IntelliJ IDEA.
 * User: ann
 * Date: 1/18/20
 * Time: 11:50 PM
 */
namespace controllers;
use vendor\Controller;
class Validate extends Controller
{
    public function index(){
        $params = $this->request->getParams();
        $this->validate($params);
    }

    public function validate($params){
        $cardNumber = $params['cardnumber'];
        $cardHolder = $params['cardholder'];
        if($this->validateNumber($cardNumber) && $this->validateHolder($cardHolder)){
            $this->response->response("Valid", 200);
        }else{
            $this->response->response("Not valid", 201);
        }
    }

    private function validateNumber($cardNumber)
    {
        $number = strrev(preg_replace('/[^\d]/', '', $cardNumber));
        $sum = 0;
        for ($i = 0, $j = strlen($number); $i < $j; $i++) {
            if (($i % 2) == 0) {
                $val = $number[$i];
            } else {
                $val = $number[$i] * 2;
                if ($val > 9)  {
                    $val -= 9;
                }
            }
            $sum += $val;
        }
        return (($sum % 10) === 0);
    }
    private function validateHolder($cardHolder)
    {
        return (bool)preg_match('/^[a-zA-Z\s]+$/', $cardHolder);
    }
}