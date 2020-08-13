create database lojafrutas;
use lojafrutas;
create table tbfrutas (
	id int not null auto_increment primary key,
    preco varchar(10),
    frutaNome varchar(30),
    quant int

); 
select * from tbfrutas;
