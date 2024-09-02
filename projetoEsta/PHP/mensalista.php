<?php
    //Definir o Projeto = Especificar as pastas
    namespace projeto\projetoesta\php;

    //Especificar qual classe vou usar
    use projeto\projetoesta\php\Mensalista;


    Class Mensalista{
        private string $nome;
        private string $telefone;
        private string $endereco;
        private string $placa;
        private string $modelo;
        private string $cor;
        private string $dataPagamento;


    public function __construct(string $nome, string $telefone, string $endereco, string $placa, string $modelo, string $cor, string $dataPagamento)
    {
        $this->nome = $nome;
         $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->cor = $cor; 
        $this->dataPagamento = $dataPagamento;
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
                    "<br> Informe seu nome: ".$this->nome.
                    "<br>Informe seu telefone: ".$this->telefone.
                    "<br>Informe seu endereço: ".$this->endereco.
                    "<br>Placa do Carro: ".$this->placa.
                    "<br>Modelo do Carro: ".$this->modelo.
                    "<br>Cor do Carro: ".$this->cor.
                    "<br>Data de pagamento: ".$this->dataPagamento;
                    
        }//fim do imprimir


    }//fim do class
?>