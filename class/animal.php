<?php

class Animal {

	private $id;
	private $id_client;
	private $name_animal;
	private $age_animal;
	private $breed_animal;

	public function __get($attribute) {
		return $this->$attribute;
	}

	public function __set($attribute, $value) {
		$this->$attribute = $value;
	}
}

?>