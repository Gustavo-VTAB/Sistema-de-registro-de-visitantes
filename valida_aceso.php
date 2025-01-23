<?php
session_start();

require 'BD.PHP';

$usuario_autenticacao = false;

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM users WHERE user_email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && $senha === $usuario['user_password']) {
            $usuario_autenticacao = true;
            $_SESSION['autenticado'] = true;
            $_SESSION['user_id'] = $usuario['user_id'];


            header('Location: area_admin.php');
            exit;
        }
    }

    header('Location: login.php?login=erro');
    exit;
} else {
    header('Location: login.php?login=erro');
    exit;
}
?>
