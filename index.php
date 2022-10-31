<?php 

    require_once('Classes/produto.php');
    require_once('Generalizacao/vendido.php');
    require_once('Generalizacao/estoque.php');
    require_once('Classes/marca.php');
    require_once('Classes/carrinho.php');
    require_once('Classes/usuario.php');

    echo "------------------------- Usuários ------------------------------- </br></br>";

    $usuario = new Usuario;
    $usuario->setID("00");
    $usuario->setNome("Admin");
    $usuario->setTelefone("(00) 0 0000-0000");
    echo "Administrador: " . $usuario->getNome();
    echo "</br></br>";


    $usuario = new Usuario;
    $usuario->setID("01");
    $usuario->setNome("Raquel");
    $usuario->setTelefone("Rua Silvio Mota, 43 - Ribeirão das Neves (MG)");
    $usuario->setTelefone("(31) 9 7171-7844");
    echo "Nome do Vendedor: " . $usuario->getNome();
    echo "</br>";
    echo "Telefone: " . $usuario->getTelefone();
    echo "</br></br>";

    $usuario = new Usuario;
    $usuario->setID("02");
    $usuario->setNome("Ana");
    $usuario->setTelefone("Rua Manoel Félix Homem, 596 - Santa Luzia (MG)");
    $usuario->setTelefone("(31) 9 9555-1457");
    echo "Nome do Usuário: " . $usuario->getNome();
    echo "</br>";
    echo "Telefone: " . $usuario->getTelefone();
    echo "</br></br>";

    $usuario = new Usuario;
    $usuario->setID("03");
    $usuario->setNome("Priscila");
    $usuario->setTelefone("Rua Coronel Marcelino, 230 - Belo Horizonte (MG)");
    $usuario->setTelefone("(31) 9 9847-0194");
    echo "Nome do Usuário: " . $usuario->getNome();
    echo "</br>";
    echo "Telefone: " . $usuario->getTelefone();
    echo "</br></br>";

    $usuario = new Usuario;
    $usuario->setID("04");
    $usuario->setNome("Gustavo Félix");
    $usuario->setTelefone("Rua dos Carijós, 230 - Belo Horizonte (MG)");
    $usuario->setTelefone("(31) 9 9127-0094");
    echo "Nome do Usuário: " . $usuario->getNome();
    echo "</br>";
    echo "Telefone: " . $usuario->getTelefone();
    echo "</br></br>";

    


    echo "------------------------- Classes e Objetos ------------------------------- </br></br>";

    include 'Classes/objeto.php';
    

    echo "------------------------- Relacionamento: Associação ----------------- </br></br>";

    include 'Relacionamento/associacao.php';



    echo "</br></br>------------------------- Relacionamento: Agregação ------------------- </br></br>";

    include 'Relacionamento/agregacao.php';


    echo "</br></br>--------------------------------- Generalização: Produtos - estoques/vendidos ------------------------------ </br></br>";

    include 'Generalizacao/produto_gen.php';

?>