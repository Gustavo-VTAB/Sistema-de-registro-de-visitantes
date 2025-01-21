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
<style>
    *{
    box-sizing: border-box;
}

body{
    margin: 0;
    padding: 0;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-align: center;
}

.navbar{
    background-color: #f4f7f6;
    height: 78px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);

}
.nav{
    font-size: 18px;
    margin-right:5%;
    align-items: center;
}

.link{
    color: black;
    text-decoration: none;
    flex: 70%;
    text-align: right;
    padding: 20px;

}
link :hover{
    color:#000000;
    border-top: 4px solid #fa0000;
}


.navbar h1{
    margin-left: 5%;
    font-size: 25px;
    align-items: center;
}

.container{
    margin-top: 5%;
}
.table{
    margin-top: 5%
}
</style>
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

    </nav>
    <table class="table table-striped-columns">
    <tr>
        <td>Nome</td>
        <td>Documento</td>
        <td>Motivo da visita</td>
        <td>Data/Hora</td>
    </tr>
    <?php      
      $result = $pdo->query("SELECT * FROM visitantes");
      $visitantes = $result->fetchAll(PDO::FETCH_ASSOC);

      
foreach ($visitantes as $row) {
    echo "<tr>";
    echo "<td>{$row['nome']}</td>";
    echo "<td>{$row['documento']}</td>";
    echo "<td>{$row['motivo']}</td>";
    echo "<td>{$row['data_hora']}</td>";
    echo "</tr>";
}
?>
</table>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
