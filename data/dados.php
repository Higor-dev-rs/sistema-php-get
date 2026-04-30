<?php

if (basename($_SERVER['PHP_SELF']) == 'dados.php') {
    exit("Acesso negado");
}

$usuarios = [
    ["usuario" => "admin", "senha" => "1234"],
    ["usuario" => "higor", "senha" => "abcd"],
    ["usuario" => "sabrina", "senha" => "brinete"]
];

$categorias = [
    ["id" => 1, "nome" => "Eletrônicos"],
    ["id" => 2, "nome" => "Informática"],
    ["id" => 3, "nome" => "Acessórios"]
];

//PRODUTOS
$produtos = [ 
    ["id" => 1, "nome" => "Notebook", "preco" => 3500, "categoria_id" => 2 ],
    ["id" => 2, "nome" => "Mouse", "preco" => 50, "categoria_id" => 3],
    ["id" => 3, "nome" => "Teclado", "preco" => 120, "categoria_id" => 2],
    ["id" => 4, "nome" => "PowerBank", "preco" => 160, "categoria_id" => 1]
];

?>