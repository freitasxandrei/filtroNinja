<?php 
    require __DIR__.'/vendor/autoload.php';

    use \App\entity\Noticia;

    $busca = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_STRING);

    $filtroStatus = filter_input(INPUT_GET, 'status', FILTER_SANITIZE_STRING);
    $filtroStatus = in_array($filtroStatus,['s','n']) ? $filtroStatus : '';

    $condicoes = [
        strlen($busca) ? 'titulo LIKE "%' .str_replace(' ','%',$busca).'%"' : null,
        strlen($filtroStatus) ? 'status = "'.$filtroStatus.'"' : null 
    ];

    $condicoes = array_filter($condicoes);

    $where = implode(' AND ',$condicoes);

    $Noticia = Noticia::getNoticia($where);
    // echo "<pre>"; print_r($vaga); echo "</pre>"; exit;

    require __DIR__.'/includes/header.php';
    require __DIR__.'/includes/listagem.php';
    require __DIR__.'/includes/footer.php';
?>