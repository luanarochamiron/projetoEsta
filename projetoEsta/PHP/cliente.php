<?php
    //Definir o Projeto = Especificar as pastas
    namespace projeto\projetoesta\php;

    use projeto\projetoesta\php\cliente;
    

    Class Cliente{
        private int $codigo;
        private string $nome;
        private string $telefone;
        private string $endereco;
        private int $data;
        private int $horaEntrada;
        private string $placa;
        private string $modelo;
        private string $cor;


        public function __construct(int $codigo,string $nome, string $telefone, string $endereco,int $data,int $horaEntrada, string $placa,string $modelo, string $cor)
        {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->data = $data;
            $this->horaEntrada = $horaEntrada;
            $this->placa = $placa;
            $this->modelo = $modelo;
            $this->cor = $cor;

        }// fim do construtor

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
            
            return  "<br>Codigo: ".$this->codigo.
                     "<br>Nome: ".$this->nome.
                    "<br>Telefone: ".$this->telefone.
                    "<br>Endereço: ".$this->endereco.
                    "<br>Data: ".$this->data.
                    "<br>Hora de entrada: ".$this->horaEntrada.
                    "<br>Placa do carro: ".$this->placa.
                    "<br>Modelo do carro: ".$this->modelo.
                    "<br>Cor do carro: ".$this->cor;
        }//fim do imprimir



    }//fim da classe
?>
