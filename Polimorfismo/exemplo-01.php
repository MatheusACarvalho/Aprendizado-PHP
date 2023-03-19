<?php

abstract class Animal{


	public function falar(){

			return "Som";

	}
	public function mover(){

			return "Anda";

	}

}

class Cachorro extends Animal{

	public function falar(){

		return "late";
	}

}

class Gato extends Animal{

	public function falar(){

		return "Miau";

	}



}

class Passaro extends Animal{


	public function falar(){

		return "Canta";

	}
	public function mover(){

		return "Voa e " . parent::mover();

	}


}


$meg = new Cachorro();
	echo $meg->falar() . "<br/>";
	echo $meg->mover() . "<br/>";
	echo "-----------------------------<br/>";
$lili = new Gato();
	echo $lili->falar() . "<br/>";
	echo $lili->mover() . "<br/>";
	echo "-----------------------------<br/>";
$piupiu = new Passaro(); 
	echo $piupiu->falar() . "<br/>";
	echo $piupiu->mover() . "<br/>";
?>