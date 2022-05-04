<?php
require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar noticia');

use \App\entity\Noticia;

$obNoticia = new Noticia;

if (isset($_POST['titulo'], $_POST['descricao'], $_POST['data'], $_POST['autor'], $_POST['status'])) {
    $obNoticia->titulo = $_POST['titulo'];
    $obNoticia->descricao = $_POST['descricao'];
    $obNoticia->data = $_POST['data'];
    $obNoticia->autor = $_POST['autor'];
    $obNoticia->status = $_POST['status'];

    $obNoticia->cadastrar();

    header('location: index.php?status=success');
    echo "<pre>"; print_r($_POST); echo "</pre>"; exit;

    exit;
}

require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/formulario.php';
require __DIR__ . '/includes/footer.php';
