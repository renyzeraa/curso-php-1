<?php

// php é uma linguagem dinamicamente tipada

declare(strict_types=1); // definir que os tipos sejam estritamente seguidos corretamente

/*
$codigo = 5.5;
$nome   = 'teste';
var_dump($codigo);
var_dump($nome);
var_dump('4' + '5');
*/

function calcula_imc(float $peso, float $altura): float
{
    var_dump($peso, $altura);
    return $peso/ ($altura*$altura);
}

$peso = '75';
var_dump( calcula_imc( (float) $peso, 1.8 ) );

?>