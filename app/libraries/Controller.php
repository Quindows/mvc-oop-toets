<?php

class Controller{

    public function Model($model){
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function View($view, $data = []){
        if (file_exists('../app/views/' . $view . '.php')){
            require_once('../app/views/' . $view . '.php');
        } else {
            die(' view bestaat niet!');
        }
    }

    
}