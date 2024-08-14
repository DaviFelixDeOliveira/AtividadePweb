Create database bd_loja;
use bd_loja;


create table tb_funcionario(
	cd_funcionario int auto_increment primary key,
    nm_funcionario varchar(50) not null,
    nm_sobrenome varchar(50)not null,
    dt_nascimento date not null,
    nm_cargo varchar(50)not null,
    nr_salario decimal(6,2) not null,
    dt_admissao date not null,
    nm_senha text
);

create table tb_cliente(
    cd_cliente int auto_increment primary key,
    nm_cliente varchar(50) not null,
    nm_sobrenome varchar(50) not null,
	nm_email varchar(50),
    nr_tel varchar(13),
    nm_endereco varchar(50) not null,
    nr_endereco int not null
);

create table tb_fornecedor(
	cd_fornecedor int auto_increment primary key,
    nm_fornecedor varchar(50) not null,
    nm_contato varchar(50),
    nr_fone varchar(13),
    nm_endereco varchar(50) not null,
    nr_endereco int not null
);
create table tb_categoria(
cd_categoria int primary key auto_increment,
nm_categoria varchar(45),
ds_categoria varchar(100)
);

create table tb_lancamento(
cd_lancamento int primary key auto_increment,
ds_lancamento varchar(100),
vl_lancamento decimal(6,2),
tp_lancamento varchar(20),
dt_lancamento date,
fk_cd_categoria int,
fk_cd_funcionario int,
foreign key (fk_cd_categoria) references tb_categoria (cd_categoria),
foreign key (fk_cd_funcionario) references tb_funcionario(cd_funcionario)

);