<?php



class Pessoa {

	public $nome = "Matheus Carvalho";
	protected $idade = 23;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";

	}

 }

class Desenvolvedor extends Pessoa
{
	

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";

	}

}



$objeto = new Desenvolvedor();

//echo $objeto->senha ."<br/>" ;

$objeto->verDados();


  ?>