<?php 
    require __DIR__.'/vendor/autoload.php';

use \App\entity\Usuario;

    // Validação do ID
    if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
        header('location: listaUsuario.php?status=error');
        exit;
    }

    // Consulta Vaga
    $obUsuario = Usuario::getArUsuario($_GET['id']);

    // Validação da Vaga
    if(!$obUsuario instanceof Usuario) {
        header('location: listaUsuario.php?status=error');
        exit;
    }

    // Validação do Post
    if(isset($_POST['excluirUsuario'])) {

        $obUsuario->excluirUsuario();

        header('location: listaUsuario.php?status=success');
        exit;
    }

    require __DIR__.'/includes/header.php';
    require __DIR__.'/includes/confirmarExclusaoUsuario.php';
    require __DIR__.'/includes/footer.php';
?> 