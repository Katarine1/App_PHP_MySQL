
Create database veterinary;

Use veterinary;

Create table tb_client (

	id int not null primary key auto_increment,
	name varchar(150) not null,
	endereco varchar(200) not null,
	telefone varchar(12) not null
);

Create table tb_animal (

	id int not null primary key auto_increment,
	id_client int not null,
	Foreign key (id_client) References tb_client (id),
	name_animal varchar(100) not null,
	age_animal int not null,
	breed_animal varchar(100) not null
);

Create table tb_consultation (

	id int not null primary key auto_increment,
	date_consultation datetime not null default current_timestamp,
	id_client int not null,
	Foreign key (id_client) References tb_client (id),
	doctor varchar(100) not null,
	reason varchar(100)not null
);

Create table tb_details (

	id int not null primary key auto_increment,
	id_consultation int not null,
	Foreign key (id_consultation) References tb_consultation (id),
	details text not null
);
