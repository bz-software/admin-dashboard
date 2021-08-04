<?php

class notFoundController extends controllerHelper{
    public function index(){
        $data = array();
        $data['title'] = 'bosta';

        $this->loadView('not-found', $data);
    }
}