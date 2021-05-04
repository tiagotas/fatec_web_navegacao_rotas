<header>

    <h1>SisFatec</h1>

    Bem-vindo (a) <?= $_SESSION['dados_usuario']->nome ?> |

    <a href="?sair=true">sair</a>

    <nav>
        <a href="/">Home</a>
        <a href="/categoria/cadastro">Cadastrar Categoria</a>
        <a href="/categoria">Listar Categorias</a>

        <a href="/produto/cadastro">Cadastrar Produto</a>
        <a href="/produto">Listar Produtos</a>
    </nav>

</header>