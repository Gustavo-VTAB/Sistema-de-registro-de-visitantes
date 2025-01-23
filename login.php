<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<style>
body {
            background-color: #F4F7F6;
        }

        .contato {
            padding: 60px 20px;
            width: 40%;
            margin: 5% auto;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .contato h2 {
            font-size: 1.8rem;
            color: blue;
            margin-bottom: 20px;
            font-weight: 700;
            text-align: center;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group input {
            width: 100%;
            padding: 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .input-group input:focus {
            background-color: #fff;
            outline: none;
        }

        .input-group input::placeholder {
            color: #aaa;
        }

        .nivel-botoes {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }

        .botao-envio:hover {
            transform: translateY(-3px);
        }

        .botao-envio:active {
            transform: translateY(1px);
        }

        .btn-dark {
            width: 100%;
            padding: 10px;
            font-weight: bold;
        }
    </style>
<body>
<div class="contato">
        <form method="post" action="valida_acesso.php" class="contato-form">
            <h2>Login</h2>

            <div class="input-group">
                <input type="email" id="email" name="email" placeholder="Seu e-mail" required>
            </div>
            <div class="input-group">
                <input type="password" id="senha" name="senha" placeholder="Senha" required>
            </div>

            <?php if (isset($_SESSION['error'])) { ?>
                <div class="text-danger mb-3 text-center"><?php echo $_SESSION['error'];
                unset($_SESSION['error']); ?></div>
            <?php } ?>

            <button type="submit" class="btn btn-dark">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
