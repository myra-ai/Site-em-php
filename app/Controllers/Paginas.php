<?php

class Paginas Extends Controller {
   
    public function index(){
        $dados = [
            'titulo' => 'Página inicial'
        ];
        $this ->view('paginas/home', $dados);
    }
    public function sobre(){
        $dados = [
            'tituloPagina' => 'Página sobre nós'
        ];
        $this ->view('paginas/sobre', $dados);
        
    }
}