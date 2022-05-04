<?php 

    require __DIR__.'/vendor/autoload.php';

    use \App\Entity\Usuario;
    $grupos = Usuario::getnoar();
    // echo "<pre>"; print_r ($vagas); echo "</pre>"; exit; 


    require __DIR__.'/includes/header.php';

    require __DIR__.'/includes/listagemUsuario.php';   

    require __DIR__.'/includes/footer.php';
?>