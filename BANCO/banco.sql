create database DB_BUSCA_CEP;

use database DB_BUSCA_CEP;

create table TB_BUSCA(
    ID int not null AUTO_INCREMENT primary key,
    CEP varchar(10) not null,
    LOCALIDADE varchar(150),
    LOGRADOURO varchar(250),
    COMPLEMENTO varchar(150),
    BAIRRO varchar(150),  
    UF varchar(2),
    DDD int,
    IBGE int,
    GIA int,
    SIAFI int
);