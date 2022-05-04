<section>
    <a href="index">
        <button class="btn btn-success"> Voltar </button>
    </a>

    <h2 class="mt-3"><?php echo TITLE;?> </h2>

    <form method="POST" class="form-send">
        <div class="form-group">
            <label> Nome </label>
            <input type="text" required class="form-control" name="nome" value="<?php echo isset($obUsuario->nome) ? $obUsuario->nome : ''; ?>">
        </div>
        <div class="form-group">
            <label> Sobrenome </label>
            <input type="text" required class="form-control" name="sobrenome" value="<?php echo isset($obUsuario->sobrenome) ? $obUsuario->sobrenome : ''; ?>">
        </div>
        <div class="form-group">
            <label> Idade </label>
            <input type="number" required class="form-control" name="idade" value="<?php echo isset($obUsuario->idade) ? $obUsuario->idade : ''; ?>">
        </div>
        <div class="form-group">
            <label> CPF </label>
            <input type="number" required class="form-control" name="cpf" value="<?php echo isset($obUsuario->cpf) ? $obUsuario->cpf : ''; ?>">
        </div>
        <div class="form-group">
            <label> Descrição </label>
            <input type="text" required class="form-control" name="descricao" value="<?php echo isset($obUsuario->descricao) ? $obUsuario->descricao : ''; ?>">
        </div>
        <div class="form-group">
            <label> Sexo </label>
            <div>
                <div class="form-check form-check-inline">
                    <label>
                        <input type="radio" required name="sexo" value="m" <?php echo isset($obUsuario->sexo) && $obUsuario->sexo == 'm' ? 'checked' : '';?>> Masculino </input>
                    </label>

                    <label class="ml-3">
                        <input type="radio" required name="sexo" value="f" <?php echo isset($obUsuario->sexo) && $obUsuario->sexo == 'f' ? 'checked' : '';?>> Feminino </input>
                    </label>
                    <label class="ml-3">
                        <input type="radio" required name="sexo" value="i" <?php echo isset($obUsuario->sexo) && $obUsuario->sexo == 'i' ? 'checked' : '';?>> Indefinido </input>
                    </label>
                </div>
            </div>
        </div>
            </div>
        </div>
        <div class="form-group">
            <label> Ordem </label>
            <input type="number" required class="form-control" name="ordem" value="<?php echo isset($obUsuario->ordem) ? $obUsuario->ordem : ''; ?>">
        </div>
        <div class="form-group">
            <label> Status </label>
            <div>
                <div class="form-check form-check-inline">
                    <label>
                        <input type="radio" required name="status" value="s" <?php echo isset($obUsuario->status) && $obUsuario->status == 's' ? 'checked' : '';?>> Ativo </input>
                    </label>

                    <label class="ml-3">
                        <input type="radio" required name="status" value="n" <?php echo isset($obUsuario->status) && $obUsuario->status == 'n' ? 'checked' : '';?>> Inativo </input>
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success"> Enviar </button>
        </div>

    </form>
</section>