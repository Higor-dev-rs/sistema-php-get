<?php include "../data/dados.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body class ="bg-light">
    <div class ="container mt-5">

        <h2 class="mb-4">Cadastro de Usuário</h2>

        <form method="GET" class="card p-4 shadow-sm">
            <div class="mb-3">
                <label class="form-label">Usuário</label>
                <input type="text" name="usuario" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" required>
            </div>

            <button class="btn btn-success">Cadastrar</button>
        </form>

        <!-- <p>Use a URL:</p>
        <code>?usuario=novo&senha=1234</code> -->

        <hr>
        <?php
        $usuario = $_GET['usuario'] ?? '';
        $senha = $_GET['senha'] ?? '';

        if (!empty($usuario) && !empty($senha)) {
            echo "<div class='alert alert-success mt-3'>";
            echo "Usuário cadastrado com sucesso! <br>";
            echo "Usuário: " . htmlspecialchars($usuario);
            echo "</div>";
        } else {
            echo "<p class='mt-3'>Preencha o formulário acima.</p>";
        }
        ?>
    </div>
</body>
</html>