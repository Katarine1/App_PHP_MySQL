<?php

class ServiceDetails {

	private $connection;
	private $details;

	public function __construct(Connection $connection, Details $details) {

		$this->connection = $connection->connect();
		$this->details = $details;
	}

	// CRUD
	
	public function insert() { // CREATE

		$query = "insert into tb_details(id_consultation, details) values(:id_consultation,:details)";
		$stmt = $this->connection->prepare($query);
		$stmt->bindValue(':id_consultation', $this->details->__get('id_consultation'));
		$stmt->bindValue(':details', $this->details->__get('details'));
		$stmt->execute();
	}

	public function list() { // READ

		$query = "select 
					c.name, a.name_animal, con.date_consultation, 
					con.reason, d.id, d.details
				  from 
					tb_client as c INNER JOIN tb_consultation as con 
					ON  (c.id = con.id_client) 

					INNER JOIN tb_details as d 
					ON (con.id = d.id_consultation)

					INNER JOIN tb_animal as a 
					ON (c.id = a.id_client)";		

		$stmt = $this->connection->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function update() { // UPDATE
		
		$query = "update tb_details set details= :details where id= :id";
		$stmt = $this->connection->prepare($query);
		$stmt->bindValue(':details', $this->details->__get('details'));
		$stmt->bindValue(':id', $this->details->__get('id'));
		return $stmt->execute();
	}

	public function remove() { // DELETE

		$query = "delete from tb_details where id= :id";
		$stmt = $this->connection->prepare($query);
		$stmt->bindValue(':id', $this->details->__get('id'));
		$stmt->execute();
	}
}

?>