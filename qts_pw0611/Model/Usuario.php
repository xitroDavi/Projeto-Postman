<?php 
    class Usuario{
        public $id;
        public $nome;
        public $sobrenome;
        public $idade;
        public $cpf;
        public $rendaMensal;
 
        function __construct($id_informado, $nome_informado, $sobrenome_informado, $idade_informada, $cpf_informado, $rendaMensal_informada){
            $this->id = $id_informado;
            $this->nome = $nome_informado;
            $this->sobrenome = $sobrenome_informado;
            $this->idade = $idade_informada;
            $this->cpf = $cpf_informado;
            $this->rendaMensal = $rendaMensal_informada;
        }
    }
?>
 