create database escola_ativa default character set utf8 default collate utf8_general_ci;
use escola_ativa;

create table usuarios ( id_usuario int primary key auto_increment, 
nome varchar(60) not null, 
sobrenome varchar(60) not null, 
genero varchar(12), 
perfil varchar(60) not null, 
email varchar(100) not null, 
senha varchar(100) not null ) default character set utf8;

insert into usuarios values (2,'Emanuel Lucas', 'Pereira de Araujo Junior','masculino','professor','emanuellucas@protonmail.com','e10adc3949ba59abbe56e057f20f883e'),
(3,'Samuel','Araujo','masculino','professor','samuel.moreira16@hotmail.com','e10adc3949ba59abbe56e057f20f883e'),
(4,'Fulana','da Silva','feminino','coordenador','fulana@hotmail.com','5622616cf9bfca67740e38c1e56eac33');

create table atividades ( id_atividade int primary key auto_increment, 
disciplina varchar(50) not null, 
metodologia varchar(30) not null, 
titulo varchar(50) not null, 
descricao text not null, 
links varchar(100) not null, 
termo int not null, 
autor int, 
foreign key (autor) references usuarios (id_usuario) )default character set utf8;

insert into atividades values (1,'linguagens','mao_na_massa','Sobre o JS','Muito bom','www.link.com.br',1,3),
(2,'matematica','gameficacao','Gameficar o aprendizado','No processo...','www.links2.com.br',1,4),
(3,'cienciasdanatureza','mao_na_massa','Experimentos de quimica','Fazer reações moleculares','ww.quimica.com.br',1,4);

create table ensino ( id_ensino int primary key auto_increment, 
area_estudo varchar(30) not null
)default character set utf8;

insert into ensino()values(default, 'Linguagens'),(default, 'Matemática'),(default, 'Ciências da Natureza'),(default, 'Ciências Humanas'),(default, 'Ensino Religioso');

create table anoletivo ( id_letivo int primary key auto_increment, 
anoletivo varchar(10) not null,
ensino int, 
foreign key (ensino) references ensino (id_ensino))default character set utf8;

insert into anoletivo()values(default, '1', 1),(default, '2', 1),(default, '3', 1),(default, '4', 1),(default, '5', 1),(default, '6', 1),(default, '7', 1),(default, '8', 1),(default, '9', 1);
insert into anoletivo()values(default, '1', 2),(default, '2', 2),(default, '3', 2),(default, '4', 2),(default, '5', 2),(default, '6', 2),(default, '7', 2),(default, '8', 2),(default, '9', 2);
insert into anoletivo()values(default, '1', 3),(default, '2', 3),(default, '3', 3),(default, '4', 3),(default, '5', 3),(default, '6', 3),(default, '7', 3),(default, '8', 3),(default, '9', 3);
insert into anoletivo()values(default, '1', 4),(default, '2', 4),(default, '3', 4),(default, '4', 4),(default, '5', 4),(default, '6', 4),(default, '7', 4),(default, '8', 4),(default, '9', 4);
insert into anoletivo()values(default, '1', 5),(default, '2', 5),(default, '3', 5),(default, '4', 5),(default, '5', 5),(default, '6', 5),(default, '7', 5),(default, '8', 5),(default, '9', 5);

select * from atividades; 
select * from anoletivo;