<?php
    //Definir o Projeto = Especificar as pastas
    namespace projeto\projetoesta\php;

    require_once("funcionario.php");
    require_once("gerente.php");
    require_once("atendente.php");
    require_once("carro.php");

    session_start();
    echo "<br><br>";
    echo $_SESSION['codigo'];  

    
    //Específica qual classe eu vou utilizar
    use projeto\projetoesta\php\funcionario;
    use projeto\projetoesta\php\gerente;
    use projeto\projetoesta\php\atendente;
    use projeto\projetoesta\php\carro;

    //Instanciar o carro = Dar o valor inicial
    $carro1 = new Carro("1234567", "Mini Cooper","Vermelho");

    //echo $carro1->imprimir();

    $atendente1 = new Atendente(1234,"Mathues","02/02/2002","(11)955763524","Rua Maldivas", 1500,"Geral");
    //echo $funcionario1->imprimir();

    $gerente1 = new Gerente(5678,"Danilo","01/01/20001","(11)944851640","Rua Detetive", 2500,"Comercial");

    $mensalista1 = new Mensalista("Daniela","(11)976548876","Rua caipora","ABC123","BMW","Laranja","Todo dia 05",200);

    $cliente1 = new Cliente(9101,"Livia","(11)987654567","Rua Jardins");



?>