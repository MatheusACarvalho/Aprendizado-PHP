<?php

 spl_autoload_register(function($DelRey){

	require_once($DelRey.".php");

}


$carro = new DelRey();

$carro->acelerar(80);








?>