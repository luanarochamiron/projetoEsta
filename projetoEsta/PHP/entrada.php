<?php
    //Definir o Projeto = Especificar as pastas
    namespace projeto\projetoesta\php;

    use projeto\projetoesta\php\entrada;
    

    Class Entrada{
        private int $codigo;
        private string $nome;
        private int $data;
        private string $placa;


        public function __construct(int $codigo,string $nome,int $data,string $placa)
        {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->data = $data;
            $this->placa = $placa;
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
                    "<br>Data: ".$this->data.
                    "<br>Placa do carro: ".$this->placa;
        }//fim do imprimir

    }//fim da classe
?>
