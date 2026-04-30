<?php include "../data/dados.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Consulta</title>
</head>
<body class ="bg-light">
    <div class ="container mt-5">

        <h2 class="mb-4 text-center">Detalhes do Produto</h2>

        <?php
        $id = $_GET['id'] ?? null;
        $nome_busca = $_GET['nome'] ?? null;

        if ($id !== null || $nome_busca !== null) {
            $encontrado = false;

            foreach ($produtos as $p) {
                if (($id !== null && $p["id"] == $id) || ($nome_busca !== null && strtolower($p["nome"]) == strtolower($nome_busca))) {
                    $categoria_nome = "não definida";
                    foreach ($categorias as $c) {
                        if ($p["categoria_id"] == $c["id"]) {
                            $categoria_nome = $c["nome"];
                        }
                    }

                    echo "<div class='card shadow-sm'>";
                    echo "<div class='card-body'>";
                    echo "<h3 class='card-title'>" . htmlspecialchars($p["nome"]) . "</h3>";
                    echo "<p class='card-text'><strong>Preço:</strong> R$ " . number_format($p["preco"], 2, ',', '.') . "</p>";
                    echo "<p class='card-text'><strong>Categoria:</strong> " . htmlspecialchars($categoria_nome) . "</p>";
                    echo "<a href='produtos.php' class='btn btn-secondary mt-3'>Voltar</a>";
                    echo "</div>";
                    echo "</div>";
                    $encontrado = true;
                    break;

                }
            }

            if (!$encontrado) {
                echo "<div class='alert alert-danger'>Produto não encontrado.</div>";
            }

        } else {
            echo "<div class='alert alert-warning'>";
            echo "Nenhum produto informado.<br>";
            echo "<a href='produtos.php' class='btn btn-primary mt-2'>Ver produtos</a>";
            echo "</div>";

        }

        ?>
    </div>
</body>
</html>