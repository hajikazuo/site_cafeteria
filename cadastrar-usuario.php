<?php

require "src/conexao-bd.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form action="src/registrar-usuario.php" method="POST">
        <p>
            <label>Nome</label>
            <input type="text" name="nome" required>
        </p>
        <p>
            <label>E-mail</label>
            <input type="text" name="email" required>
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha" required>
        </p>
        <p>
            <label>Cargo</label>
            <select name="cargo" required>
                <option value="usuario">Usuário</option>
                <option value="administrador">Administrador</option>
            </select>
        </p>
        <p>
            <button type="submit">Cadastrar</button>
        </p>
    </form>
</body>
</html>
