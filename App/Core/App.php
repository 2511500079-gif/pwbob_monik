<?php

class App {
    protected $controller = 'Home'; //default controller
    protected $method = 'index'; //default method
    protected $params = []; //default parameter

    public function __construct()
    { 
        $url = $this->parseURL();
        
        //controller
        if(isset($url[0]) && file_exists('../app/controllers/'.$url[0].'.php')){
$this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php'; //memanggil file controller
        $this->controller = new $this->controller;

        //method
        if(isset($url[1])){ //cek apakah method ada
            if(method_exists($this->controller, $url[1])){ //cek apakah method ada di controller
                $this->method = $url[1]; //jika ada, maka method diganti dengan method yang dipanggil
                unset($url[1]); //hapus index ke 1 dari array url
            }
        }

        //params
        if(!empty($url)){ //cek apakah params ada
            $this->params = array_values($url); //jika ada, maka params diganti dengan params yang dipanggil
        }

        //jalankan controller dan method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params); //memanggil method dari controller dan mengirimkan params
        
    }

    public function parseURL()
    {
        if(isset($_GET['url'])){
            $url =rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL); //membersihkan url dari karakter aneh
            $url = explode('/', $url); 
            return $url;
        }
    }
}