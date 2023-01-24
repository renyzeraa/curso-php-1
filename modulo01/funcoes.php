<?php

function calculaImc($peso, $altura){
	return $peso / ($altura * $altura);
}

echo calculaImc( 81, 1.75);

function percorre($km){
	static $total; // variavel que retem o seu valor, entre uma chamada e outra 
	print "percorreu mais $km\n";
}

percorre(20);
percorre(20);
percorre(20);

?>