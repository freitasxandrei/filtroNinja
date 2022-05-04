<?php
require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar registro!');

use App\entity\Usuario;

$obUsuario = new Usuario();

// echo "<pre>"; print_r($_POST); echo "<pre>"; exit;
if (isset($_POST['nome'], $_POST['sobrenome'], $_POST['idade'], $_POST['cpf'], $_POST['descricao'], $_POST['sexo'], $_POST['ordem'], $_POST['status'])) {
    $obUsuario->nome = $_POST['nome'];
    $obUsuario->sobrenome = $_POST['sobrenome'];
    $obUsuario->idade = $_POST['idade'];
    $obUsuario->cpf = $_POST['cpf'];
    $obUsuario->descricao = $_POST['descricao'];
    $obUsuario->sexo = $_POST['sexo'];
    $obUsuario->ordem = $_POST['ordem'];
    $obUsuario->status = $_POST['status'];

    // echo "<pre>"; print_r($_POST); echo "<pre>"; exit;


// echo "<pre>"; print_r($obGrupo); echo "<pre>"; exit;


    $obUsuario->cadastrarUsuario();

    header('location: listaUsuario.php?status=success');
    // echo "<pre>"; print_r($_POST); echo "</pre>"; exit;

    exit;
}


require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/formularioUsuario.php';
require __DIR__ . '/includes/footer.php';
