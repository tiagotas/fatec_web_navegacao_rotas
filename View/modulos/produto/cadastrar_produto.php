<html>

<head>
    <meta charset="utf-8" />
    <title>SisFatec - Cadastro de Produto</title>

    <script type="text/javascript" src="/View/js/comportamentos_produto.js"></script>
</head>

<body>

    <?php include PATH_VIEW . '/includes/cabecalho.php' ?>

    <main>
        <h2>Cadastro de Produtos</h2>

        <form action="/produto/salvar" method="post">

            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao" id="descricao" value="<?= $dados_produto->descricao ?>" />

            <label for="id_categoria">Categoria: </label>
            <select name="id_categoria" id="id_categoria">
                <option value="">Selecione a Categoria</option>

                <?php                 
                    foreach ($lista_categorias as $item) : 
                        $selected = ($dados_produto->id_categoria == $item->id) ? 'selected' : '';               
                    ?>
                    <option value="<?= $item->id ?>" <?= $selected ?>> <?= $item->descricao ?> </option>
                <?php endforeach ?>

            </select>

            <label for="preco">Preço </label>
            <input type="number" name="preco" id="preco" value="<?= $dados_produto->preco ?>"/>

            <?php if($dados_produto->id !== null): ?>
                <input type="hidden" name="id" value="<?= $dados_produto->id ?>" />
                <a id="btn_excluir" href="/produto/excluir?id=<?= $dados_produto->id ?> ">Excluir</a>

            <?php endif?>

            <button type="submit">Salvar</button>
        </form>

    </main>

    <?php include PATH_VIEW . '/includes/rodape.php' ?>

</body>

</html>