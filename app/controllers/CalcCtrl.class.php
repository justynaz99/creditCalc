<?php

namespace app\controllers;
use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

    private $form;
    private $result;

    public function __construct() {

        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    function getParams() {

        $this->form->amount = getFromRequest('amount');
        $this->form->installment = getFromRequest('installment');
        $this->form->duration = getFromRequest('duration');
    }

    function validate() {

        if(! (isset($this->form->amount) && isset($this->form->installment) && isset($this->form->duration))) {

            return false;
        }

        if($this->form->amount == ""){
            getMessages()->addError('Enter the amount!');
        }
        if($this->form->duration == "") {
            getMessages()->addError('Enter the duration!');
        }

        if(! getMessages()->isError()) {

            if(! is_numeric($this->form->amount)) {
                getMessages()->addError('The amount should be a number!');
            }

            if(! is_numeric($this->form->duration)) {
                getMessages()->addError('The duration should be a number!');
            }

        }

        return ! getMessages()->isError();
    }

    function process() {

        $this->getParams();

        if($this->validate()) {

            $this->form->amount = intval($this->form->amount);
            $this->form->installment = intval($this->form->installment);
            $this->form->duration = intval($this->form->duration);

            $iRate= $this->form->installment*$this->form->duration;
            $q= 1+(3.5/12);
            $this->result->result=$this->form->amount*pow($q,($this->form->duration*$iRate))*($q-1)/(pow($q,($this->form->duration*$iRate-1)));
            $this->result->result=round($this->result->result);
        }

        $this->generateView();
    }

    public function generateView() {
        global $user;

        getSmarty()->assign('user', $user);


        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('result', $this->result);

        getSmarty()->display('calcView.tpl');

    }


}