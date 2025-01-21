<?php
session_start();
include("bd.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<nav class="navbar ">
      <div class="container-fluid">
        <h1>Sistema Registro De Visitas</h1>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="link" href="#">Visitantes</a>
          </li>
          <li class="nav-item">
            <a class="link" href="#">Painel Administrativo</a>
          </li>
          <li class="nav-item">
          
            <a class="botao"><button type="button" class="btn btn-danger">Fale Conosco</button></a>
          </li>
        </ul>
  
      </div>
      <?php      
      $result = $pdo->query("SELECT * FROM visitantes");
      $visitantes = $result->fetchAll(PDO::FETCH_ASSOC);
      echo "<table>";
foreach ($visitantes as $row) {
    echo "<tr>";
    echo "<td>{$row['nome']}</td>";
    echo "<td>{$row['documento']}</td>";
    echo "<td>{$row['motivo']}</td>";
    echo "<td>{$row['data_hora']}</td>";
    echo "</tr>";
}
echo "</table>";
?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
