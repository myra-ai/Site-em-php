<?php
include './../app/configuracao.php';
include './../app/autoload.php'; //não precisar fazer vários includes no topo
$db = new Database;
//date_default_timezone_set('America/Sao_Paulo');
//$id = 5;
//$usuarioId = 100;
//$titulo = 'editado';
//$texto = 'Texto do post 1';
//$criadoEm = date('Y-m-d H:i:s');
//$db-> query("INSERT INTO posts (usuario_id, titulo, texto) VALUES (:usuario_id, :titulo, :texto)");

//$db-> query("UPDATE `posts` SET usuario_id= :usuario_id, titulo =:titulo, texto=:texto, criado_em=:criadoEm WHERE id=:id");
//$db-> query("DELETE FROM `posts` WHERE id=:id");
//$db-> bind(":usuario_id", $usuarioId); //testar valores
//$db-> bind(":titulo", $titulo);
//$db-> bind(":texto", $texto);
//$db-> query("SELECT * FROM posts WHERE id={$id}");
//$db-> bind(":id", $id);
//$db-> bind(":criadoEm", $criadoEm);

//$db -> executa();
//foreach($db-> resultados() as $post){
//   echo $post->id. '-'. $post->titulo.'<br>';
//}

//$db -> resultado();

//echo $db-> resultado()-> titulo;

//echo '<hr>Total de resultados:'. $db -> totalResultados();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NOME ?> </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?=URL?>/public/css/estilos.css" >
</head>
<body>
<?php
   include '../app/Views/topo.php';
   $rotas = new Rota();
   include '../app/Views/rodape.php';
 
?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
<script src="<?=URL?>/public/js/jquery.funcoes.js"></script>
</body>

</html>