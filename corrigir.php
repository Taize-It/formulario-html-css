<?php 
    $q1 = $_GET['q1'];
    $q2 = $_GET['q2'];
    $q3 = $_GET['q3'];
    $q4 = $_GET['q4'];
    $q5 = $_GET['q5'];

    $pontos=0;

    if($q1=="b") $pontos+=20;
    if($q2=="b") $pontos+=20;
    if($q3=="c") $pontos+=20;
    if($q4=="c") $pontos+=20;
    if($q5=="a") $pontos+=20;

    echo "
        <h1>Resultado: $pontos ponto(s)</h1> 
        <h3><a href='index.hml'>Voltar</a></h3>
    ";
?>