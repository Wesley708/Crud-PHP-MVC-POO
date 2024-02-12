<?php

    class Produto{
        private $nome;
        private $descricao;

        public function getNome(){
            return $this->nome;
        }
        public function setNome($n){
            $this->nome = $n;
        }

        
        public function getDescricao(){
            return $this->descricao;
        }
        public function setDescricao($d){
            $this->nome = $d;
        }
    }

?>