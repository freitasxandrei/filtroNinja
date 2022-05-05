<?php 
    require __DIR__.'/vendor/autoload.php';

    use \App\entity\Noticia;

    $Noticia = Noticia::getNoticia();
    $obNoticia = new Noticia;
    $listaNoticia = $obNoticia::getNoticia();
    // echo "<pre>"; print_r($vaga); echo "</pre>"; exit;

    require __DIR__.'/includes/header.php';
    require __DIR__.'/includes/listagem.php';
    require __DIR__.'/includes/footer.php';
?>