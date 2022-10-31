<?php 

    $produto1 = new Produto;

    $produto1->setID(1001);
    $produto1->setNome("Galaxy S22 Ultra");
    // $produto1->setPreco(str_replace('.00', '', '3.500'));
    $produto1->setPreco(3500);
    $produto1->setAnunciante("Raquel Cristina");



    $produto2 = new Produto;

    $produto2->setID(1002);
    $produto2->setNome("Iphone 8");
    // $produto1->setPreco(str_replace('.00', '', '3.500'));
    $produto2->setPreco(1200);
    $produto2->setAnunciante("Emmily Vitória");
    
    $usuario = new Usuario;

    $usuario->setNome("Gustavo Félix");

  

    $carrinho = new Carrinho;

    $carrinho->incluirItens($produto1);
    $carrinho->incluirItens($produto2);


    echo "Itens no Carrinho: ----------------- </br>";
    echo $carrinho->exibirCarrinho();

    echo "</br>";
    echo "-----------------------------------------------------------";
    echo "</br></br>";
    echo "</br></br>";

    echo "NOTA FISCAL </br></br>";
    echo "Nome do Comprador: " . $usuario->getNome() . "</br></br>";
    echo "Nome do Vendedor: " . $produto1->getAnunciante() . "</br></br>";
    echo "Nome do Vendedor: " . $produto2->getAnunciante() . "</br></br>";
    echo "O Valor total da compra: R$ " . $carrinho->totalCompra() . "</br></br>";
    echo "Forma de Pagamento: Cartão de Crédito ";
    echo "</br></br>";


?>