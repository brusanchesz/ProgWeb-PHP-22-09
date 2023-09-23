create database pokemon;
use pokemon;
create table pokedex(
nome varchar (64),
tipo varchar (64),
idPkemon int(6) auto_increment, primary key (idPkemon)
);

insert into pokedex (`nome`, `tipo`) values ('Bubasalro', 'Grama');

select * from pokedex;

insert into pokedex (`nome`, `tipo`) values 
('Pokemomzin', 'pedra'),
('Zubat', 'terra'),
('Golden', 'agua');

