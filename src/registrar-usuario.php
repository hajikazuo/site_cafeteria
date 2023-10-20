<?php
require "conexao-bd.php";

if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['cargo'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cargo = $_POST['cargo'];

    $hashedPassword = password_hash($senha, PASSWORD_DEFAULT);

    try {
        $sql_code = "INSERT INTO usuarios (nome, email, senha, cargo) VALUES (?, ?, ?, ?)";
        $statement = $pdo->prepare($sql_code);
        $statement->execute([$nome, $email, $hashedPassword, $cargo]);

        echo "Usuário cadastrado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao cadastrar o usuário: " . $e->getMessage();
    }
}
?>
