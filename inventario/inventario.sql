drop database if exists ifsp_inventario;
create database ifsp_inventario;
use ifsp_inventario; 

create table inventario_computadores
(
	id int not null auto_increment primary key,
    codigo_patrimonio varchar(50),
    descricao varchar(50),
    marca varchar(100),
    modelo varchar(100),
    armazenamento int,
    memoria int,
    processador varchar(100),
    possui_placa_video bool,
    placa_video varchar(100),
    sistema_operacional varchar(50)
);