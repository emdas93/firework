<?php

class Controller {
    public function __construct(){
        foreach ($_SERVER as $key => $value){
            echo '$_SERVER'.'['.$key.'] => '.$value.'<BR>';
        }

        echo $_SERVER['REQUEST_URI'];
    }
}