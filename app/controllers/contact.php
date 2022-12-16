<?php

class Contact extends Controller{
    public function index(){
        echo "Contact Index";
    }

    public function about_us($name1 = '', $name2 = ''){
        echo "About Us".$name1. ' ' . $name2;
    }
}


?>