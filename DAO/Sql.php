<?php


class Sql extends PDO {

	private $conn;

	public function __construct(){


		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");


	}


	private function setParams($statment, $paramenters = array()){

 		foreach ($params as $key => $value) {
			
			$stmt->bindParam($key, $value);

		}




	}


	public function query($rawQuery, $params = array()){


		$stmt = $this->conn->prepare($rawQuery)


	}


}















  ?>