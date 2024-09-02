<?php
    //Definir o Projeto = Especificar as pastas
    namespace projeto\projetoesta\php;

    use projeto\projetoesta\php\dados;
    

    Class Relatorio{
        private int $codigo;
        private string $nome;
        private string $dataNascimento;
        private string $telefone;
        private string $endereco;
        private float $salario;
        private string  $cargo;

        public function __construct(int $codigo,string $nome,string $dataNascimento, string $telefone, string $endereco,float $salario,string $cargo)
        {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->dataNascimento = $dataNascimento;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->salario = $salario;
            $this->cargo = $cargo;

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
                     "<br>Data de nascimento: ".$this->dataNascimento.
                    "<br>Telefone: ".$this->telefone.
                    "<br>Endereço: ".$this->endereco.
                    "<br>Salário: ".$this->salario.
                    "<br>Cargo: ".$this->cargo;
        }//fim do imprimir



    }//fim da classe
?>
