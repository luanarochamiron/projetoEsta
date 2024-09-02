<?php
    //Definir o Projeto = Especificar as pastas
    namespace projeto\projetoesta\php;

    use projeto\projetoesta\php\saida;
    

    Class Saida{
        private int $codigo;
        private string $nome;
        private int $horaEntrada;
        private int $horaSaida;
        private int $preco;

        public function __construct(int $codigo,string $nome,int $horaEntrada, int $horaSaida, int $preco)
        {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->horaEntrada = $horaEntrada;  
            $this->horaSaida = $horaSaida;  
            $this->preco = $preco; 
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
                    "<br>Hora de entrada: ".$this->horaEntrada.
                    "<br>Hora de saída: ".$this->horaSaida.
                    "<br>Preço a ser pago: ".$this->preco;
                   

        }//fim do imprimir

    }//fim da classe
?>
