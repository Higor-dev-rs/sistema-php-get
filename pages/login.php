<?php include "../data/dados.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<body class ="bg-light">
    <div class ="container mt-5">

        <h2 class="mb-4 text-center">Login</h2>
        <form method="GET">
            <input type="text" name="usuario" placeholder="Usuário" class="form-control mb-2">
            <input type="password" name="senha" placeholder="Senha" class="form-control mb-2">
            <button class="btn btn-primary">Entrar</button>
        </form>
        <!-- <h2>Login (Via GET)</h2>

        <p>Use: </p>
        <code>?usuario=admin&senha=1234</code>
-->
        <hr> 

        <?php 
            $usuario = $_GET['usuario'] ?? '';
            $senha = $_GET['senha'] ?? '';

            if (!empty($usuario) && !empty ($senha)) {
                
            $autenticado = false;

            foreach ($usuarios as $u) {
                if ($u["usuario"] === $usuario && $u["senha"] === $senha) {
                    $autenticado = true;
                }

            }

                if ($autenticado) {
                echo "<h3>Login realizado com sucesso!</h3>";
                } else {
                echo "<p style='color:red;'>Dados inválidos.</p>";
                }
            } else {
            echo "<p>Aguardando login...</p>";
            }
            
        ?>
    </div>
</body>
</html>