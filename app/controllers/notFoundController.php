<?php

class notFoundController extends controllerHelper{
    public function index(){
        $data = array();
        $data['title'] = 'Error 404: página não encontrada';

        $this->loadView('not-found', $data);
    }
}