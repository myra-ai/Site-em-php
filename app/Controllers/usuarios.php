<?php



class Usuarios extends Controller {
    public function cadastrar(){
      $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); //Evitar códigos maliciosos
      if(isset($formulario)){ //se o formulário existir
        //  echo "clicou no formulário";
        $dados = [
           'nome' => trim($formulario['nome']), //tirar os espaços vazios
           'email' => trim($formulario['email']),
           'senha' => trim($formulario['senha']),
           'confirmar_senha' => trim($formulario['confirmar_senha'])
        ];
        if(empty($formulario['nome'])){
            echo 'Preencha o campo nome';
        }
        var_dump($formulario);
      } else {
        
     $dados = [

        'nome' => '',
        'email' => '',
        'senha' => '',
        'confirma_senha' => ''
     ];

      }



        $this->view("usuarios/cadastrar", $dados);
    }
}