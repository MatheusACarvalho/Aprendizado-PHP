<?php


class Pessoa{

	public $nome;//Atributo

	public function falar(){//Método

		return "O meu nome é ".$this->nome;

	}

}
$Matheus = new Pessoa();
$Matheus->nome = "Matheus Carvalho";
echo $Matheus->falar();





  ?>