<?php

class Client {

	private $id;
	private $name;
	private $address;
	private $telephone;

	public function __get($attribute) {
		return $this->$attribute;
	}

	public function __set($attribute, $value) {
		$this->$attribute = $value;
	}
}

?>