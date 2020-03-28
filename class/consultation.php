<?php

class Consultation {

	private $id;
	private $date_consultation;
	private $id_client;
	private $doctor;
	private $reason;

	public function __get($attribute) {
		return $this->$attribute;
	}

	public function __set($attribute, $value) {
		$this->$attribute = $value;
	}
}

?>