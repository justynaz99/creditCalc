<?php

namespace app\controllers;
use app\forms\CalcForm;
use app\transfer\CalcResult;
use Medoo\Medoo;

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

    public function action_calcCompute() {

        $this->getParams();

        if($this->validate()) {

            $this->form->amount = intval($this->form->amount);
            $this->form->installment = intval($this->form->installment);
            $this->form->duration = intval($this->form->duration);

            $this->result->result = $this->form->amount/$this->form->duration/$this->form->installment;
            $this->result->result=round($this->result->result);
        }

        try {
            $database = new Medoo ([
                'database_type' => 'mysql',
                'database_name' => 'calc',
                'server' => 'localhost',
                'username' => 'root',
                'password' => '',
                'charset' => 'utf8',
                'collation' => 'utf8_polish_ci',
                'port' => 3306,
                'option' => [
                    \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]
            ]);
            $database->insert("result", [
                "amount" => $this->form->amount,
                "duration" => $this->form->duration,
                "installment" => $this->form->installment,
                "rate" => $this->result->result,
                "date" => date("Y-m-d H:i:s"),
            ]);

        } catch (\PDOException $ex) {
//            getMessages()->addError("DB error" . $ex->getMessage());
        }

        $this->generateView();
    }



    public function action_calcShow() {
        $this->generateView();
    }

    public function action_sqlBaseShow() {
        try{

            $database = new Medoo([
                // required
                'database_type' => 'mysql',
                'database_name' => 'calc',
                'server' => 'localhost',
                'username' => 'root',
                'password' => '',

                // [optional]
                'charset' => 'utf8mb4',
                'collation' => 'utf8mb4_polish_ci',
                'port' => 3306,
                'option' => [
                    \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]
            ]);
            // Select all columns
            $datas = $database->select("result", "*");



        }catch(\PDOException $ex) {
//            getMessages()->addError("DB error:" . $ex->getMessage());
        }
        getSmarty()->assign('calc', $datas);
        $this->generateView('database.tpl');
    }

    public function generateView($type='calcView.tpl') {

        getSmarty()->assign('user', unserialize($_SESSION['user']));


        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('result', $this->result);

        getSmarty()->display($type);

    }


}