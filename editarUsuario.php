<?php
require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Editar registro!');

use App\entity\Usuario;

//Validação do ID
if (!isset($_GET['id'])  || !is_numeric($_GET['id'])) {
    header('location: index.php?status=error');
    exit;
}

//Consulta Vaga
$obUsuario = Usuario::getArUsuario($_GET['id']);

//Validação da Vaga
if (!$obUsuario instanceof Usuario) {
    header('location: index.php?status=error');
    exit;
}

//Validação do POST
if (isset($_POST['nome'], $_POST['sobrenome'], $_POST['idade'], $_POST['cpf'], $_POST['descricao'], $_POST['sexo'], $_POST['ordem'], $_POST['status'])) {
    $obUsuario->nome = $_POST['nome'];
    $obUsuario->sobrenome = $_POST['sobrenome'];
    $obUsuario->idade = $_POST['idade'];
    $obUsuario->cpf = $_POST['cpf'];
    $obUsuario->descricao = $_POST['descricao'];
    $obUsuario->sexo = $_POST['sexo'];
    $obUsuario->ordem = $_POST['ordem'];
    $obUsuario->status = $_POST['status'];

    $obUsuario->atualizarUsuario();

    header('location: listaUsuario.php?status=success');
    exit;
    
}

require __DIR__ . '/INCLUDES/header.php';

require __DIR__ . '/INCLUDES/formularioUsuario.php';

require __DIR__ . '/INCLUDES/footer.php';