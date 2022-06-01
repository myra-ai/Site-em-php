<?php


class Rota {
    private $controlador = 'Paginas';
    private $metodo = 'index';
    private $parametros = [];
    public function __construct()
    {
     $url = $this->url() ? $this->url(): [0];
     
     if(file_exists('../app/Controllers/'.ucwords($url[0]).'.php'))://função que pega o primeiro caractere e transforma em maisculo da primeira palavra da url e extensão php
         $this->controlador = ucwords($url[0]);
         unset($url[0]); //destruir a variavel depois que setei
     endif;
    require_once '../app/Controllers/'.$this->controlador.'.php';
    $this->controlador = new $this->controlador;
    if(isset($url[1])){
        if(method_exists($this->controlador, $url[1])){
            $this -> metodo = $url[1];
            unset($url[1]);

        }
    }

    $this->parametros = $url ? array_values($url) : []; //verificando parametros
    call_user_func_array([$this->controlador, $this->metodo], $this->parametros);
    
}
    private function url(){ //recuperar url
       $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
       if(isset($url)){ //se existir url, retorne a mesma
            $url = trim(rtrim($url,'/')); // retira espaços em branco, pra o branco não ser dado como caractere
            $url = explode('/', $url); // explode quando tiver / e transforma em um array
           return $url;
       }
    }
}