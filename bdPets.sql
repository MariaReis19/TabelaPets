create database dbPets CHARACTER SET utf8 COLLATE utf8_general_ci;

use dbPets;

create table tbPets(
codPet int not null auto_increment,
nomePet varchar(100),
idadePet int(3),
racaPet varchar (100),
obsPet varchar (500),
nomeTutor varchar(100),
emailTutor varchar(100),
telCelular char (11),
primary key(codPet))ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;