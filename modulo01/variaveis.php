<?php

// variaveis

$nome = 'renan';
$sobrenome = 'silva';

print $nome . ' ' . $sobrenome;

$nomeCompleto = "x{$nome}x x{$sobrenome}x "; 

print $nomeCompleto;

$a = 5 ;
$b = 4.5;
$c = true;
$d = 'a  ';

$e = '2';

// numero em string em conta matematica, vira number

var_dump($a * $e, $b, $c, $d);

// passagem por referencia

$f = 10;
$g = &$f; // & na frente da variavel, ela passar a ser por referencia, 
		  // por isso devolve o valor 5 nas duas

$f = 5;

var_dump($f);
var_dump($g);

// =============== Boolean

// Sempre ira retornar FALSE
// ""      = string vazia
// 0       = zero
// 0.0     = zero ponto zero
// "0"     = zero em string
// null
// false
// array() = array vazia

if(empty($f)){
	// ira entrar se for vazio
}

// =============== Array

$lista = ['vermelho', 'azul', 'preto'];

var_dump($lista);

// =============== Objeto

$objeto = new stdClass; // cria um objeto
$objeto->nome = 'renan';
$objeto->altura = 1.8;

var_dump($objeto);