create database cadastrado;
use cadastrado;

create table cliente
(
	nome varchar(40) not null,
    id int not null auto_increment,
    email varchar(100) not null,
    idade int not null,
    curso varchar(20) not null,
    primary key (id)
);



