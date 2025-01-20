<?php
session_start();
include('bd.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        background-color: #f4f7f6;
    }

    .container {
        padding: 50px 20px;
        background-color: #fffafa;
        margin-top: 7%;
        justify-content: right;
        align-items: flex-start;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        display: flex;
    }

    .form-container {
        gap: 50px;
        flex-wrap: wrap;
    }

    .form-label {
        display: flex;
        justify-content: flex-start;
        gap: 5px;
        margin-left: 2%;
    }

    .navbar {
        background-color: #f4f7f6;
        height: 78px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);

    }

    .nav {
        font-size: 18px;
        margin-right: 5%;
        align-items: center;
    }

    .link {
        color: black;
        text-decoration: none;
        flex: 70%;
        text-align: right;
        padding: 20px;

    }

    link :hover {
        color: #000000;
        border-top: 4px solid #fa0000;
    }


    .navbar h1 {
        margin-left: 5%;
        font-size: 25px;
        align-items: center;
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

    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <form class="row g-3" action="valida_form.php" method="POST">
                    <div class="col-md-4">
                        <label for="validationServer01"  class="form-label">id</label>
                        <input type="number" class="form-control is-invalid" name="id" id="id" aria-describedby="validationServer03Feedback" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer01"  class="form-label">Primeiro Nome</label>
                        <input type="text" class="form-control is-invalid" name="nome" id="nome" aria-describedby="validationServer03Feedback" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer02"  class="form-label">Sobrenome</label>
                        <input type="text" class="form-control is-invalid" name="sobrenome" id="sobrenome" aria-describedby="validationServer03Feedback" required>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustomUsername"  class="form-label">CPF</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control is-invalid" name="documento" id="documento" aria-describedby="validationServer03Feedback" required>

                        </div>
                    </div>

                        <div class="mb-3">
                            <label for="validationTextarea" class="form-label">Motivo da Visita:</label>
                            <textarea class="form-control" name="motivo"  id="motivo" required></textarea>
                            <div class="invalid-feedback">
                                Por favor, insira uma mensagem na área de texto.
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                <label class="form-check-label" for="invalidCheck2">
                                    Concordo com os termos e condições de uso
                                </label>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">
                            Enviar Formulario</button>
            </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
