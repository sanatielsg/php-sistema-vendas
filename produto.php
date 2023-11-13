<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.0.2-dist/css/estilo.css">
    <title>Document</title>
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
    <fieldset>
        <legend>
            Cadastro
        </legend>
        <form>
            <label for="codigo">Código</label> <br>
            <input class="form-control" type="text" name="codigo" id="codigo" disabled>

            <label for="nome">Descrição</label> <br>
            <input class="form-control" type="text" name="nome" id="nome" required>

            <label for="usuario">EAN</label> <br>
            <input class="form-control" type="text" name="usuario" id="usuario" required>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    ATIVO
                </label>
            </div>
           

            
            <label for="preco1">Preco1</label>
            <input class="form-control" type="text" name="preco1" id="preco1" required>

            <label for="preco2">Preco2</label>
            <input class="form-control"  type="text" name="preco2" id="preco2" required>

            <label for="preco3">Preco3</label>
            <input class="form-control"  type="text" name="preco3" id="preco3" required>

            <label for="data_hora">Data cadastro</label> <br>
            <input type="datetime-local" name="data_hora" id="data_hora" required> 

            <div class="d-flex justify-content-center">
                <button class="btn btn-outline-primary btn3">Salvar</button>
                <button class="btn btn-outline-warning mr-2">Editar</button>
                <button class="btn btn-outline-success">Cancelar</button>
                <button class="btn btn-outline-danger">Deletar</button>
            </div>

        </form>
    </fieldset>
    <script src="./assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>