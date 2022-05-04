<?php
    $mensagem = '';
    if(isset($_GET['status'])) {
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

<?php if($mensagem != '') { ?>
<section>
    <?php echo $mensagem; ?>
</section>
<?php } ?>

<header>
 
    <a href="index.php">
 <img id="logo" src="assets/image/logo.jpg" alt=""> 
    </a>
 <ul>
    <a href="listaUsuario">  <li>Usuários</li></a>
 </ul>

 </header>

 <div class="container" style="margin-left: 10%;">

<section>
    <a href="cadastrarUsuario">
        <button class="btn btn-success"> Cadastrar </button>
    </a>

    <?php if(count($grupos) == 0) { ?>
    <div class="alert alert-secondary mt-3"> Nenhum Usuário Encontrada </div>

    <?php } else { ?>

        <table class="table bg-dark text-light mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Idade</th>
                <th>CPF</th>
                <th>Descrição</th>
                <th>Sexo</th>
                <th>Ordem</th>
                <th>Status</th>
                <!-- Para editar e excluir --> 
            </tr>
        </thead>
 
        <tbody>
            <?php foreach ($grupos as $key => $value) { ?>
                <tr>
                    <td><?php echo $value->id; ?></td>
                    <td><?php echo $value->nome; ?></td>
                    <td><?php echo $value->sobrenome; ?></td>
                    <td><?php echo $value->idade; ?></td>
                    <td><?php echo $value->cpf; ?></td>
                    <td><?php echo $value->descricao; ?></td>
                    <td><?php echo ($value->sexo == 'm' ? 'Masculino' :: 'f' ? 'Feminino' :: 'i' ? 'Indefinido'); ?></td>
                    <td><?php echo $value->ordem; ?></td>
                    <td><?php echo ($value->status == 's' ? 'Ativo' : 'Inativo'); ?></td>
                    <td>
                    <a class="neon-bt2" href="editarUsuario.php?id=<?php echo $value->id; ?>">

                            <span></span>

                            <span></span>

                            <span></span>

                            <span></span>

                            Editar

                            </a>

                        <a class="neon-bt" href="excluirUsuario.php?id=<?php echo $value->id; ?>">

<span></span>

<span></span>

<span></span>

<span></span>

Excluir

</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php } ?>

</section>