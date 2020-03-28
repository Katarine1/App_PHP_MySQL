<?php

class ServiceAnimal {

	private $connection;
	private $animal;

	public function __construct(Connection $connection, Animal $animal) {

		$this->connection = $connection->connect();
		$this->animal = $animal;
	}

	// CRUD
	
	public function insert() { // CREATE

		$query = "insert into tb_animal(id_client, name_animal, age_animal, breed_animal) values(:id_client,:name_animal,:age_animal,:breed_animal)";
		$stmt = $this->connection->prepare($query);
		$stmt->bindValue(':id_client', $this->animal->__get('id_client'));
		$stmt->bindValue(':name_animal', $this->animal->__get('name_animal'));
		$stmt->bindValue(':age_animal', $this->animal->__get('age_animal'));
		$stmt->bindValue(':breed_animal', $this->animal->__get('breed_animal'));
		$stmt->execute();
	}

	public function list() { // READ

		$query = "select 
					c.name, a.id, a.name_animal, a.age_animal, a.breed_animal 
				from 
					tb_client as c INNER JOIN tb_animal as a 
					ON  (c.id = a.id_client);";

		$stmt = $this->connection->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);		
	}

	public function update() { // UPDATE
		
		$query = "update tb_animal set name_animal= :name_animal, age_animal= :age_animal, breed_animal= :breed_animal where id= :id";
		$stmt = $this->connection->prepare($query);
		$stmt->bindValue(':name_animal', $this->animal->__get('name_animal'));
		$stmt->bindValue(':age_animal', $this->animal->__get('age_animal'));
		$stmt->bindValue(':breed_animal', $this->animal->__get('breed_animal'));
		$stmt->bindValue(':id', $this->animal->__get('id'));
		return $stmt->execute();
	}

	public function remove() { // DELETE

		$query = "delete from tb_animal where id= :id";
		$stmt = $this->connection->prepare($query);
		$stmt->bindValue(':id', $this->animal->__get('id'));
		$stmt->execute();
	}
}

?>