<?php

class ServiceClient {

	private $connection;
	private $client;

	public function __construct(Connection $connection, Client $client) {

		$this->connection = $connection->connect();
		$this->client = $client;
	}

	// CRUD
	
	public function insert() { // CREATE

		$query = "insert into tb_client(name, address, telephone) values(:name, :address, :telephone)";
		$stmt = $this->connection->prepare($query);
		$stmt->bindValue(':name', $this->client->__get('name'));
		$stmt->bindValue(':address', $this->client->__get('address'));
		$stmt->bindValue(':telephone', $this->client->__get('telephone'));
		$stmt->execute();
	}

	public function list() { // READ

		$query = "select id,name,address,telephone from tb_client";
		$stmt = $this->connection->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function update() { // UPDATE
		
		$query = "update tb_client set name=:name,address=:address,telephone=:telephone where id=:id";
		$stmt = $this->connection->prepare($query);
		$stmt->bindValue(':name', $this->client->__get('name'));
		$stmt->bindValue(':address', $this->client->__get('address'));
		$stmt->bindValue(':telephone', $this->client->__get('telephone'));
		$stmt->bindValue(':id', $this->client->__get('id'));
		return $stmt->execute();
	}

	public function remove() { // DELETE

		$query = "delete from tb_client where id=:id";
		$stmt = $this->connection->prepare($query);
		$stmt->bindValue(':id', $this->client->__get('id'));
		$stmt->execute();
	}
}

?>