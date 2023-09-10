create database db_LojaVirtual;
use db_LojaVirtual;

create table tbl_categoria
(	
    cd_categoria int primary key auto_increment,
    ds_categoria varchar(25) not null    
);

create table tbl_autor
(	
    cd_autor int primary key auto_increment,
    nm_autor varchar(45) not null    
);

create table tbl_livro
(	
    cd_livro int primary key auto_increment,
    no_isbn varchar(17) not null,
    cd_categoria int not null,
    nm_livro varchar(70) not null,
    cd_autor int not null,
    no_pag varchar(4) not null,
    vl_preco decimal(6,2) not null,
    qt_estoque int not null,
    ds_resumo_obra text not null,
    ds_capa varchar(255) not null,
    sg_lancamento enum('S','N') not null,
    constraint fk_cat foreign key(cd_categoria) references tbl_categoria(cd_categoria),
    constraint fk_autor foreign key(cd_autor) references tbl_autor(cd_autor)
);

insert into tbl_categoria
values(default,'Design'),
(default, 'Infraestrutura'),
(default, 'Dados'),
(default, 'Front-end'),
(default, 'Mobile');


insert into tbl_autor
values(default,'Alexandre Aquiles'),		-- codigo 1
(default, 'Tárcio Zemel'),					-- codigo 2	
(default, 'Rafael Steil'),					-- codigo 3
(default, 'Fabricio Teixeira'),				-- codigo 4
(default, 'Vinícius Carvalho'),				-- codigo 5
(default, 'Fernando Baglio'),				-- codigo 6
(default, 'David Paniz'),					-- codigo 7
(default, 'Rosangela Marquesone'),			-- codigo 8
(default, 'Natan Souza'),					-- codigo 9
(default, 'Danilo Sato'),				    -- codigo 10
(default, 'Juliano Ramos'),				    -- codigo 11
(default, 'Fernando Bryan Frizzarin'),		-- codigo 12
(default, 'Eduardo Popovici'),				-- codigo 13
(default, 'Adrian Gois'),				    -- codigo 14
(default, 'Everton Coimbra de Araújo'),		-- codigo 15
(default, 'Sérgio Lopes'),				    -- codigo 16
(default, 'Flávio Almeida'),			    -- codigo 17
(default, 'Roger Silva');				    -- codigo 18