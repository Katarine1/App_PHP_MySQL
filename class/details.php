<?php

class Details {

	private $id;
	private $id_consultation;
	private $details;

	public function __get($attribute) {
		return $this->$attribute;
	}

	public function __set($attribute, $value) {
		$this->$attribute = $value;
	}
}

?>