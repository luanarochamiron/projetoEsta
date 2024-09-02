<?php
    //Definir o Projeto = Especificar as pastas
    namespace projeto\projetoesta\php;

    //Especificar qual classe vou usar
    use projeto\projetoesta\php\alterarMensalista;
 


    Class AlterarMensalista{
        private int $codigo;
        private string $nome; 
        private string $telefone;
        private string $endereco;
        private string $placa;
        private string $modelo;
        private string $cor;
        private string $dataPagamento;
        private int $valorMensal;

    public function __construct(int $codigo, string $nome, string $telefone, string $endereco, string $placa, string $modelo, string $cor, string $dataPagamento, int $valorMensal)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->cor = $cor; 
        $this->dataPagamento = $dataPagamento;
        $this->valorMensal = $valorMensal;
    }//fim do construtor

    public function __get(string $name):mixed
    {
        return $this->name;
    }//fim do get

    public function __set(string $name, mixed $value):void
    {
        $this->name = $value;
    }//fim do set

    public function imprimir():string
        {
            
            return 
                    "<br>Codigo: ".$this->codigo.
                    "<br>Nome: ".$this->nome.
                    "<br>Telefone: ".$this->telefone.
                    "<br>Endereço: ".$this->endereco.
                    "<br>Placa do Carro: ".$this->placa.
                    "<br>Modelo do Carro: ".$this->modelo.
                    "<br>Cor do Carro: ".$this->cor.
                    "<br>Data de pagamento: ".$this->dataPagamento.
                    "<br>Valor a pagar mensalmente: ".$this->valorMensal;
                    
        }//fim do imprimir


    }//fim do class
?>