<?php
    //Definir o Projeto = Especificar as pastas
    namespace projeto\projetoesta\php;

    use projeto\projetoesta\php\dinheiro;
    

    Class Dinheiro{
        private int $valorRecebido;
        private string $entrada;
        private string $saida;
        private int $troco;

        public function __construct(int $valorRecebido, int $entrada, int $saida, int $troco)
        {
            $this->valorRecebido = $valorRecebido;
            $this->entrada = $entrada;
            $this->saida = $saida;
            $this->troco = $troco;
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
            
            return  "<br>Valor recebido: ".$this->valorRecebido.
                    "<br>Entrada: ".$this->entrada.
                    "<br>Saida: ".$this->saida.
                    "<br>Troco: ".$this->troco;

        }//fim do imprimir

    }//fim da classe
?>