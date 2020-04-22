<?php

namespace app\controllers;
use app\transfer\User;
use app\forms\LoginForm;

class LoginCtrl{
    private $form;

    public function __construct(){
        $this->form = new LoginForm();
    }

    public function getParams(){
        $this->form->login = getFromRequest('login');
        $this->form->pass = getFromRequest('pass');
    }

    public function validate() {
        if (! (isset ( $this->form->login ) && isset ( $this->form->pass ))) {
            return false;
        }

        if (! getMessages()->isError ()) {

            if ($this->form->login == "") {
                getMessages()->addError ( 'Enter username!' );
            }
            if ($this->form->pass == "") {
                getMessages()->addError ( 'Enter password!' );
            }
        }


        if ( !getMessages()->isError() ) {
            if ($this->form->login == "admin" && $this->form->pass == "admin") {
                $user = new User($this->form->login, 'admin');
                $_SESSION['user'] = serialize($user);
                addRole($user->role);

            } else if ($this->form->login == "user" && $this->form->pass == "user") {
                $user = new User($this->form->login, 'user');
                $_SESSION['user'] = serialize($user);
                addRole($user->role);
            } else {
                getMessages()->addError('Incorrect username or password!');
            }
        }
        return ! getMessages()->isError();
    }

    public function doLogin() {
        $this->getParams();
        if ($this->validate()){
            header("Location: ".getConf()->app_url."/");
        } else {
            $this->generateView();
        }

    }

    public function doLogout(){
        session_destroy();
        $this->generateView();
    }

    public function generateView(){
        getSmarty()->assign('form', $this->form);
        getSmarty()->display('loginView.tpl');
    }
}