DROP DATABASE IF EXISTS prova2;
CREATE DATABASE prova2;
use prova2;
CREATE TABLE fluxo_caixa(
id int primary key,
data date,
tipo varchar(10),
valor decimal(10,2),
historico varchar(150),
cheque varchar(3)
);