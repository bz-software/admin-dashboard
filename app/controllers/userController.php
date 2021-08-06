<?php
class userController extends controllerHelper{
    public function login(){
        $data = array();
        
        $this->loadView('login', $data);
    }

    public function register(){
        $data = array();
        $this->loadView('register', $data);
    }
}