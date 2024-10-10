<?php
// //2) Você trabalha em uma empresa que precisa calcular o salário de um funcionário de forma precisa e eficiente. A empresa possui diferentes tipos de funcionários, cada um com uma estrutura de pagamento distinta. O objetivo é criar um sistema que possa calcular o salário de um funcionário com base nas regras específicas de cada tipo de funcionário. Todos os tipos de funcionários possuem um salário base mensal.
// Funcionário Horista: recebe um pagamento baseado no número de horas trabalhadas. Calculo do salário:  valor pago por hora (60,00), número de horas trabalhadas no mês (40).
// Funcionário Assalariado: recebe um salário fixo mensal com a possibilidade de bônus adicional (15%).
// O sistema deve permitir o cadastro de um funcionário, com seus respectivos dados.
// Deve calcular o salário do funcionário de acordo com suas regras específicas.
// Deve fornecer uma forma de visualizar os salários calculados de todos os funcionários.
    //Estudo com inserção de GET e Set // (modificador)Set: insere Dados no atributo | (Acessor)Get:  (recupera os dados do atributo*)
    class Funcionario{
        private $nome;
        private $salario;
        private $totalHoras;
        private $valorHora;
        private $bonus;
        private $tipo;
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setSalario($salario){
            $this->salario = $salario;
        }
        public function getSalario(){
            return $this->salario;
        }
        public function setTotalHoras($totalHoras){
            $this->totalHoras = $totalHoras;
        }
        public function getTotalHoras(){
            return $this->totalHoras;
        }
        public function setValorHora($valorHora){
            $this->valorHora = $valorHora;
        }
        public function getValorHora(){
            return $this->valorHora;
        }
        public function setBonus($bonus){
            $this->bonus = $bonus;
        }
        public function getBonus(){
            return $this->bonus;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        public function getTipo(){
            return $this->tipo;

        }
        public function calcularSalario(){
            if($this->tipo == 'assalariado'){   
                $this->salario = ($this->salario * ($this->bonus / 100) )+ $this->salario;
            }else{
                $this->salario = $this->totalHoras * $this->valorHora;
            }
        }
        public function info(){
            echo "Nome: ".$this->nome.
            "<br>Salario: ".$this->salario;
        }
        public function info2(){
            echo "Nome: ".$this->nome. "<br>Salario: ".$this->salario."<br>";
        }








    }
    

?>