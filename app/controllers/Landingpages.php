<?php

class Landingpages extends Controller{

    public function __construct(){

    }

    public function index(){
        //echo "Hoi";exit();
        header("Location: " . URLROOT . "/richestpeoples/index");;
    }
}