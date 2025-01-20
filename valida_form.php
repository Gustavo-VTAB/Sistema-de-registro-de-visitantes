<?php
include("bd.php");

if (!empty($_POST['nome']) && !empty($_POST['sobrenome']) && !empty($_POST['documento']) && !empty($_POST['motivo']) && !empty($_POST['id'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $documento = $_POST['documento'];
    $motivo = $_POST['motivo'];
    $id = $_POST['id'];


    try {
        $query = $pdo->prepare("INSERT INTO sistema (nome, sobrenome, documento, motivo, id) VALUES (?, ?, ?, ?, ?)");
        $query->execute([$nome, $sobrenome, $documento, $motivo, $id]);
        echo "<script>alert('Formulário enviado com sucesso'); window.location.href = 'index.php';</script>";
        exit();

    } catch (Exception $e) {
        error_log("Erro ao atualizar o registro: " . $e->getMessage());
        echo "<script>alert('Erro ao atualizar o formulário.'); window.location.href = 'registrar_visita.php';</script>";
        exit();
    }

} else {
    echo "<script>alert('Preencha todos os campos corretamente.'); window.location.href = 'registrar_visita.php';</script>";
    exit();
}
?>
