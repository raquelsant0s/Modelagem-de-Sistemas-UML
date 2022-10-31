<?php 

    $produto = new Produto;
    $produto1 = new Produto;
    $produto2 = new Produto;

    $produto->setQtdE(10);
    $produto1->setQtdP(1);
    $produto2->setQtdP(1);

    $estoque = New Estoque;

    $estoque->qtd_Estoque($produto);

    echo "Quantidade de produtos no estoque : " . $estoque->numEstoque() . "</br> </br>";

    $vendido = new Vendido;

    $vendido->incluirVendas($produto1);
    $vendido->incluirVendas($produto2);

    $saldo = $estoque->numEstoque() - $vendido->qtdTotal();
    
    echo "Quantidade de produtos vendidos : " . $vendido->qtdTotal() . "</br> </br>";

    echo "Saldo Atual : " . $saldo. "</br>";


?>