<?php
$mensagem = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
            break;
        case 'error':
            $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
            break;
        default:
            # code...
            break;
    }
}
?>

<?php if ($mensagem != '') { ?>
    <section>
        <?php echo $mensagem; ?>
    </section>
<?php } ?>

<section>
    <a href="cadastrar">
        <button class="btn btn-success"> Cadastrar </button>
    </a>

    <?php if (count($Noticia) == 0) { ?>
        <div class="alert alert-secondary mt-3"> Nenhuma Vaga Encontrada </div>

    <?php } else { ?>

        <form method="get">

            <div class="row my-4">


                <div class="col">

                    <input type="text" placeholder="Buscar por ID Ninja" name="busca" class="form-control" value="<?= $busca ?>">

                </div>

                <div class="col">

                    <select name="status" class="form-control">

                        <option value=""> Ativo/Inativo </option>
                        <option value="s" <?=$filtroStatus == 's' ? 'selected' : ''?>> Ativo </option>
                        <option value="n" <?=$filtroStatus == 'n' ? 'selected' : ''?>> Inativo </option>

                    </select>

                </div>

                <div class="col d-flex align-itens-end">

                    <button type="submit" class="btn btn-primary"> Filtrar </button>

                </div>

            </div>

        </form>


        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Data</th>
                    <th>Autor</th>
                    <th>Status</th>
                    <th>Ações</th> <!-- Para editar e excluir -->
                </tr>
            </thead>

            <tbody>
                <?php foreach ($Noticia as $key => $value) { ?>
                    <tr>
                        <td><?php echo $value->id; ?></td>
                        <td><?php echo $value->titulo; ?></td>
                        <td><?php echo $value->descricao; ?></td>
                        <td><?php echo $value->data; ?></td>
                        <td><?php echo $value->autor; ?></td>
                        <td><?php echo ($value->status == 's' ? 'Ativo' : 'Inativo'); ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $value->id; ?>">
                                <button type="button" class="btn btn-primary">Editar</button>
                            </a>

                            <a href="excluir.php?id=<?php echo $value->id; ?>">
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <?php } ?>

</section>