<?php
include 'Aluno.php';
    $nome = $_GET['nome'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];

    //var_dump($nome);
    //echo "<br><br>";

    $aluno1 = new Aluno();
    $aluno1->nome = $nome;
    $aluno1->nota1 = $nota1;
    $aluno1->nota2 = $nota2;
    $aluno1->nota3 = $nota3;
    
    // echo "<br><br>";
    // var_dump($nome);
    var_dump($aluno1);

    $aluno1->calcularMedia();

    var_dump($aluno1);

    echo "<br><br>";
    $aluno1->info();
    echo "<br><br>";
    $aluno1->info2();
    // echo "<br><br><h1>Fim Deve ter var_dump1 & 2. </h1>";
    // echo "<br><br><h2>Fim Deve ter info 1 & info2. </h2>";

?>