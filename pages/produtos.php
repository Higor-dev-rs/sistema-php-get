<?php include "../data/dados.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 <title>Produtos</title>
</head>
<body class ="bg-light">
    <div class ="container mt-5">

        <h2 class="mb-4 text-center">Produtos</h2>

        <form method="GET" class="mb-4">
            <label class="form-label">Filtrar por categoria:</label>
            <select name="categoria" class="form-select">
                <option value="">Todas</option>
                <option value="1">Eletrônicos</option>
                <option value="2">Informática</option>
                <option value="3">Acessórios</option>
            </select>
            <button class="btn btn-success mt-2">Filtrar</button>
        </form>

        <?php

            usort($produtos, function($a, $b) {
                return $a['preco'] <=> $b['preco'];
            });

            $filtro_categoria = $_GET['categoria'] ?? null;

            foreach ($produtos as $p) {
                if ($filtro_categoria && $p["categoria_id"] != $filtro_categoria) {
                    continue; 
                }
                $categoria_nome = "Desconhecida";

                foreach ($categorias as $c) {
                    if ($p["categoria_id"] == $c["id"]) {
                    $categoria_nome = $c["nome"];
                    }
                }
                // echo "<strong>" . htmlspecialchars($p["nome"]) . "</strong><br>";
                // echo "Preço: R$ " . number_format($p["preco"], 2, ',', '.') . "<br>";
                // echo "Categoria: " . htmlspecialchars($categoria_nome) . "<br>";
                
                // echo "<a href='consulta.php?id=" . $p["id"] . "'>Ver produto</a>";
                
                echo "<hr>";
                echo "<div class='card mb-3'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . htmlspecialchars($p["nome"]) . "</h5>";
                echo "<p class='card-text'>Preço: R$ " . number_format($p["preco"], 2, ',', '.') . "</p>";
                echo "<p class='card-text'>Categoria: " . htmlspecialchars($categoria_nome) . "</p>";
                echo "<a class='btn btn-primary' href='consulta.php?id=" . $p["id"] . "'>Ver produto</a>";
                echo "</div>";
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>