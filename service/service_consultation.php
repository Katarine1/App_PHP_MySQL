<?php

class ServiceConsultation {

	private $connection;
	private $consultation;

	public function __construct(Connection $connection, Consultation $consultation) {

		$this->connection = $connection->connect();
		$this->consultation = $consultation;
	}

	// CRUD
	
	public function insert() { // CREATE

		$query = "insert into tb_consultation(date_consultation, id_client, doctor, reason) values(:date_consultation,:id_client,:doctor,:reason)";
		$stmt = $this->connection->prepare($query);
		$stmt->bindValue(':date_consultation', $this->consultation->__get('date_consultation'));
		$stmt->bindValue(':id_client', $this->consultation->__get('id_client'));
		$stmt->bindValue(':doctor', $this->consultation->__get('doctor'));
		$stmt->bindValue(':reason', $this->consultation->__get('reason'));
		$stmt->execute();
	}

	public function list() { // READ

		$query = "select 		
					c.name, con.id, con.date_consultation, 
					con.id_client, con.doctor, con.reason 
				 from 
					tb_client as c INNER JOIN tb_consultation as con
					ON  (c.id = con.id_client);";		
		$stmt = $this->connection->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function update() { // UPDATE
		
		$query = "update tb_consultation set date_consultation= :date_consultation, doctor= :doctor, reason= :reason where id= :id";
		$stmt = $this->connection->prepare($query);
		$stmt->bindValue(':date_consultation', $this->consultation->__get('date_consultation'));
		$stmt->bindValue(':doctor', $this->consultation->__get('doctor'));
		$stmt->bindValue(':reason', $this->consultation->__get('reason'));
		$stmt->bindValue(':id', $this->consultation->__get('id'));
		$stmt->execute();
	}

	public function remove() { // DELETE

		$query = "delete from tb_consultation where id= :id";
		$stmt = $this->connection->prepare($query);
		$stmt->bindValue(':id', $this->consultation->__get('id'));
		$stmt->execute();
	}

}

?>