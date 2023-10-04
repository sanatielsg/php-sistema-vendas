<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>

<body>
    <h1>Cadastro de Clientes</h1>
    <fieldset>
        <legend>
            Cadastro
        </legend>
        <form>
            <label for="codigo">Código</label> <br>
            <input type="text" name="codigo" id="codigo" disabled> <br>

            <label for="nome">Nome completo</label> <br>
            <input type="text" name="nome" id="nome" required> <br>

            <label for="cpf_cnpj">CPF/CNPJ</label> <br>
            <input type="text" name="cpf_cnpj" id="cpf_cnpj" required> <br>

            <label for="cpf_cnpj">Data cadastro</label> <br>
            <input type="datetime-local" name="cpf_cnpj" id="cpf_cnpj" required> <br> <br>

            <button>Salvar</button>
            <button>Editar</button>
            <button>Cancelar</button>
            <button>Deletar</button>
        </form>
    </fieldset>
</body>

</html>