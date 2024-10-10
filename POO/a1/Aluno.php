<?php
    //1) Um professor precisa armazenar 3 notas de um estudante, calcular e apresentar a média final. Crie um formulário para inserção  dos dados do aluno (nome, nota1, nota2, nota3) e apresente as informações (nome e média final) na tela. A média será calculada considerando que a nota1 terá peso 3, a nota2 terá peso 3 e a nota3 terá peso 4.

    class Aluno{
        public $nome;
        public $nota1;
        public $nota2;
        public $nota3;
        public $media;
    
        public function calcularMedia(){
            $this->media = ((($this->nota1*3)+($this->nota2 * 3 )+($this->nota3 * 4)) / (10));
        }
        public function info(){
            echo "Nome: ".$this->nome.
            "<br>Media: ".$this->media;
        }
        public function info2(){
            echo "Nome: ".$this->nome. "<br> Media: ".$this->media."<br>";
        }
    
    }

?>