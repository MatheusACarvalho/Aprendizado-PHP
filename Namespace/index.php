<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Matheus Carvalho");
$cad->setEmail("matheus@email.com.br");
$cad->setSenha("123456");  

$cad->registrarVenda();

?>