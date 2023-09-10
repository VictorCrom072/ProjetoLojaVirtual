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