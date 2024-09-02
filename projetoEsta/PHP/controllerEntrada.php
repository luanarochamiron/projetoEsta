<?php
     //Definir o Projeto = Especificar as pastas
    namespace projeto\projetoesta\php;
    
    require_once('entrada.php');

    //Específica qual classe eu vou utilizar
    use projeto\projetoesta\php\entrada;
    use projeto\projetoesta\php\controllerEntrada;
?>

<doctype HTML>
    <HTML lang="PT-BR">
        <head>
            <meta charset="UFT-8">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link rel="stylesheet" href="../CSS/estilo1.css">
        </head>
        <body>
            <!--nav-->

            <nav class="navbar bg-body-tertiary fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> Estacionamento Stop Car</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Qual página deseja usar?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mensalista</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Funcionário
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Gerente</a></li>
                            <li><a class="dropdown-item" href="#">Atendente</a></li>  
                            </ul>
                        </li>
                        </ul>
                        <form class="d-flex mt-3" role="">
                        <input class="form-control me-2" type="" placeholder="" aria-label="">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>
                    </div>
                </div>
            </nav>
            <br><br>
            <br><br>

            
            <section class="formulario">
            <form method="POST">
                <label>Codigo:</label>
                <input type="text" id="codigo" name="codigo"/><br><br>
                
                <label>Digite seu nome:</label>
                <input type="text" id="nome" name="nome"/><br><br>
        
                <label>Digite a data:</label>
                <input type="text" id="data" name="data"/><br><br>

                <label>Digite a hora de entrada:</label>
                <input type="text" id="horaEntrada" name="horaEntrada"/><br><br>

                <label>Digite a placa do carro:</label>
                <input type="text" id="placa" name="placa"/><br><br>

                <a class="btn btn-outline-secondary" href="../HTML/cliente.html" role="button">VOLTAR</a><br><br>
                

                <button>CADASTRAR
                
                <?php
                    session_start();
                    try {
                        $codigo = $_POST['codigo'];
                        $nome = $_POST['nome'];
                        $data = $_POST['data'];
                        $horaEntrada = $_POST['horaEntrada'];
                        $placa = $_POST['placa'];
                        
                        $_SESSION['eCodigo'] = $codigo;
                        $_SESSION['eNome'] = $nome;
                        $_SESSION['eData'] = $data;
                        $_SESSION['eHoraEntrada'] = $horaEntrada;
                        $_SESSION['ePlaca'] = $placa;
                        
                        $entrada1 = new Entrada($codigo, $nome, $data, $horaEntrada,$placa);
                    
                    } catch(exception $erro){
                        echo $erro;
                    } //fim do try_catch
                ?>
                </button><br><br>
                
                <?php 
                    echo $entrada1->imprimir();
                ?>
            </form>
            </section>
            <footer class="bg-body-tertiary text-center text-lg-start">
                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgb(126, 125, 125);">
                © 2020 Copyright:
                <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                </div>
                <!-- Copyright -->
            </footer>
        </body>
    </HTML>