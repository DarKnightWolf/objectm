<?php 
    include 'Funcionario.php';

    $nome = $_GET['nome'];
    $bonus = $_GET['bonus'];
    $valorHora = $_GET['valorHora'];
    $totalHoras = $_GET['totalHoras'];
    $salario = $_GET['salario'];
    $tipo = $_GET['tipo'];

    var_dump($salario);

    $funcionario1 = new Funcionario();
    // $funcionario1->nome = $nome; //modo antigo, não funciona  aqui
    $funcionario1->setNome($nome);
    $funcionario1->setSalario($salario);
    $funcionario1->setBonus($bonus);
    $funcionario1->setValorHora($valorHora);
    $funcionario1->setTotalHoras($totalHoras);
    $funcionario1->setTipo($tipo);
    var_dump($funcionario1);
    $funcionario1->calcularSalario();
    $funcionario1->info();

?>