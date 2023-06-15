<?php
include './../app/configuracao.php';
include './../app/Libraries/Rota.php';
include './../app/Libraries/Controller.php';
include './../app/Libraries/Database.php';
$db=new Database;

$usuarioId=10;
$titulo='Título do post';
$texto='Texto do post';

$db->query("INSERT INTO post(usuario_id,titulo,texto)values(:usuario_id,:titulo,:texto)");
$db->bind(":usuario_id",$usuarioId);
$db->bind(":titulo",$titulo);
$db->bind(":texto",$texto);

$db->executa();

echo'<hr>fotal Resultados: '.$db->totalResultados();
echo'<hr>Último id: '.$db->ultimoIdInserido();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NOME ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?=URL?>/public/css/estilos.css">
</head>

<body>
    <?php
    include '../app/views/header.php';
    $rotas = new Rota();
    include '../app/views/footer.php';
    ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"></script>

<script  src="<?=URL?>/public/js/jquery.funcoes.js"></script>


</body>
</html>