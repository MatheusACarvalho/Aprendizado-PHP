<?php

$idadeUsuario = 66;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($idadeUsuario < $idadeCrianca){


	echo "Criança";


} else if ($idadeUsuario < $idadeMaior ) {

	echo "Adolecente";	


} else if ($idadeUsuario < $idadeMelhor) {
	

	echo "Adulto";

} else {


	echo "Idoso";
}

echo "<br>";

echo ($idadeUsuario < $idadeMaior)?"Menor de Idade":"Maior de Idade";


  ?>