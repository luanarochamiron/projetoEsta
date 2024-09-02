<?php
    //Definir o Projeto = Especificar as pastas
    namespace projeto\projetoesta\php;

    use projeto\projetoesta\php\cartao;
    

    Class Cartao{
        private string $titular;
        private int $numero;
        private string $validade;
        private string $seguranca;


        public function __construct(string $titular, int $numero, string $validade, string $seguranca)
        {
            $this->titular = $titular;
            $this->numero = $numero;
            $this->validade = $validade;
            $this->seguranca = $seguranca;

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
            
            return  "<br>Informe o nome registrado no cartão: ".$this->titular.
                     "<br>Informe o número do cartão: ".$this->numero.
                    "<br>Digite a data de validade: ".$this->validade.
                    "<br>Digite o código de segurança: ".$this->seguranca;
        }//fim do imprimir



    }//fim da classe
?>
