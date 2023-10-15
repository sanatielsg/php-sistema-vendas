<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cadastro de Usuários</h1>
    <fieldset>
        <legend>
            Cadastro
        </legend>
        <form>
            <label for="codigo">Código</label> <br>
            <input type="text" name="codigo" id="codigo" disabled> <br>

            <label for="nome">Nome completo</label> <br>
            <input type="text" name="nome" id="nome" required> <br>

            <label for="usuario">Usuário</label> <br>
            <input type="text" name="usuario" id="usuario" required> <br>

            <label for="senha">Senha</label> <br>
            <input type="password" name="senha" id="senha" required> <br>

            <label for="data_hora">Data cadastro</label> <br>
            <input type="datetime-local" name="data_hora" id="data_hora" required> <br> <br>

            <button>Salvar</button>
            <button>Editar</button>
            <button>Cancelar</button>
            <button>Deletar</button>
        </form>
    </fieldset>
</body>

</html>