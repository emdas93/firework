<?php

class Controller {
    public $controller;
    public $action;

    public function __construct(){
        // URL 자르기
        $url = $_GET['url'];   
        $urls = explode('/', $url);
        
        // Controller 지정
        $this->controller = $urls[0];
        
        // Action 지정
        $this->action = $url[1];
        
        // 파일 불러오기 용 컨트롤러 이름
        $controller = ucwords($this->controller).'Controller';

        // Controller 파일 불러오기
        require './src/controller/'.$controller.'.php';

        // 불러온 Controller 인스턴스 생성
        $instance = new $controller;
        var_dump($instance);
        
    }
}