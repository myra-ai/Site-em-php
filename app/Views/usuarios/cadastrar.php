<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-body">
         <h2>Cadastre-se </h2>
         <small>Preencha o formulário abaixo para fazer seu cadastro </small>

         <form name="cadastrar" method="POST" action="<?=URL?>/usuarios/cadastrar">
         <div class="form-group">
    <label for="nome">Nome: <sup class="text-danger">*</sup></label>
    <input type="text" id="nome"
    name="nome" class="form-control" value="<?=$dados['nome'] ?>" >
  </div>
  <div class="form-group">
    <label for="email">Email: <sup class="text-danger">*</sup></label>
    <input type="email" id="email"
    name="email" class="form-control" value="<?=$dados['email'] ?>" >
  </div>

  <div class="form-group">
    <label for="senha">Senha: <sup class="text-danger">*</sup></label>
    <input type="password" id="senha"
    name="senha" class="form-control" value="<?=$dados['senha'] ?>">
  </div>

  <div class="form-group">
    <label for="confirmar_senha">Confirme a senha: <sup class="text-danger">*</sup></label>
    <input type="password" id="confirmar_senha"
    name="confirmar_senha" class="form-control" value="<?=$dados['confirmar_senha'] ?>" >
  </div>

<div class="row">
    <div class="col">
<input type="submit" value="Cadastrar" class="btn btn-info btn-block">
    </div>
    
    <div class="col">
        <a href="#"> Você tem uma conta? Faça login </a>
        </div>
</div>

         </form>
</div>
    </div>
</div>