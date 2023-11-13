<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.0.2-dist/css/estilo.css">
    <title>Cadastro de Cliente</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary">
            <div class="container">
                <a class="navbar-brand text-white" href="#">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cadastro
                            </a>
                            <ul class="dropdown-menu ">
                                <li><a class="dropdown-item" href="#">Usuário</a></li>
                                <li><a class="dropdown-item" href="#">Cliente</a></li>
                                <li><a class="dropdown-item" href="#">Produto</a></li>
                                <li><a class="dropdown-item" href="#">Vendas</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Relatório
                            </a>
                            <ul class="dropdown-menu ">
                                <li><a class="dropdown-item" href="#">Usuário</a></li>
                                <li><a class="dropdown-item" href="#">Cliente</a></li>
                                <li><a class="dropdown-item" href="#">Produto</a></li>
                                <li><a class="dropdown-item" href="#">Vendas</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <h1 class="text-center">Cadastro de Clientes</h1>
    <fieldset>
        <legend>
            Cadastro
        </legend>
        <form>
            <label for="codigo">Código</label> <br>
            <input class="form-control" type="text" name="codigo" id="codigo" disabled> <br>

            <label for="nome">Nome completo</label> <br>
            <input class="form-control" type="text" name="nome" id="nome" required> <br>

            <label for="cpf_cnpj">CPF/CNPJ</label> <br>
            <input class="form-control" type="text" name="cpf_cnpj" id="cpf_cnpj" required> <br>

            <div class="d-flex justify-content-center">
                <button class="btn btn-outline-primary btn3">Salvar</button>
                <button class="btn btn-outline-warning mr-2">Editar</button>
                <button class="btn btn-outline-success mr-3">Cancelar</button>
                <button class="btn btn-outline-danger">Deletar</button>
            </div>

        </form>
    </fieldset>
    <script src="./assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>