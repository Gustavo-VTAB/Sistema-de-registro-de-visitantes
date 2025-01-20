<?php

$dsn = 'mysql:host=localhost;dbname=sistema';
$usuario = 'root';
$senha = '';
global $pdo;

try {
    $pdo = new PDO($dsn, $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'erro :' . $e->getCode() . ' mensagem: ' . $e->getMessage();
    echo '<br><hr>';
    echo 'deu um erro na conexão. ';
}
?>
