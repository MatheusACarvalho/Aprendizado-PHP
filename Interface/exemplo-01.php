<?php

interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);


}

Class Civic implements Veiculo {

	public function acelerar($velocidade)
	{

		echo "o veículo acelerou até" . $velocidade.  " km/h";

	}


	public function frenar($velocidade)
	{

		echo "o veículo frenou até" . $velocidade.  " km/h";

	}



public function trocarMarcha($marcha)
	{

		echo "o veículo engatou a marcha " . $marcha;

	}



}

$carro = new Civic();
$carro->trocarMarcha(1);




  ?>