<?php
require "conexao-bd.php";

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha'];

    if (empty($email) || empty($senha)) {
        echo "Preencha seu e-mail e senha";
    } else {
        if (!isset($_SESSION)) {
            session_start();
        }

        try {
            $sql_code = "SELECT id, nome, senha FROM usuarios WHERE email = ?";
            $statement = $pdo->prepare($sql_code);
            $statement->execute([$email]);
            $row = $statement->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                $id = $row['id'];
                $nome = $row['nome'];
                $hashedPassword = $row['senha'];

                if (password_verify($senha, $hashedPassword)) {
                    $_SESSION['id'] = $id;
                    $_SESSION['nome'] = $nome;

                    header("Location: ../admin.php");
                    exit;
                } else {
                    echo "Falha ao logar! E-mail ou senha incorretos";
                }
            } else {
                echo "Falha ao logar! E-mail ou senha incorretos";
            }
        } catch (PDOException $e) {
            echo "Erro na consulta ao banco de dados: " . $e->getMessage();
        }
    }
}
?>
