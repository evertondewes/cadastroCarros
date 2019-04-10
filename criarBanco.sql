create database carros;

use carros;

create table motorista(
	id int auto_increment primary key,
    nome varchar(100)
);

create table carro(
	id int auto_increment primary key,
    id_motorista int,
    placa varchar(8),
    foreign key(id_motorista) references motorista(id)
);

insert into motorista(nome) values('Albert'),
('Newton'),
('Silvio Santos');


select * from motorista;

select * from carro;