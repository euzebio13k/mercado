create database mercado;
use mercado;
create table fornecedor(
    id int auto_increment primary key,
    nome varchar(50) not null,
    cnpj varchar(14) unique not null
);
create table produto(
    id int auto_increment primary key,
    nome varchar(50) not null,
    preco decimal(7,2) unique not null,
    fornecedor_id int not null,
    foreign key (fornecedor_id) references fornecedor(id)
);