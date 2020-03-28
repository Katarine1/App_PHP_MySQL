<?php

class Connection {

	private $host = 'localhost';
	private $dbname = 'veterinary';
	private $user = 'root';
	private $password = '';

	public function connect() {

		$connect = new PDO(
			"mysql:host=$this->host;dbname=$this->dbname",
			"$this->user",
			"$this->password"
		);
		return $connect;		
	}
}

?>