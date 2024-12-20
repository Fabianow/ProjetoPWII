create database ecommerce;
use ecommerce;

#select * from usuário;
create table usuário (
id_usuario int auto_increment primary key not null,
nome varchar(255) not null,
email varchar(255) not null,
senha varchar(20) not null,
celular varchar(20) not null
);

create table cep (
id_cep int primary key not null,
codigo_cep varchar(9) not null,
logradouro varchar(255) not null,
tipo_log varchar(255) not null,
bairro varchar(45) not null,
cidade varchar(45) not null,
estado varchar(2) 
);

create table endereço (
id_endereco int primary key not null,
id_cep int not null,
complemento varchar(45),
numero int,
constraint foreign key (id_cep) references cep(id_cep)
);

create table fornecedor (
id_fornecedor int primary key not null,
razao_social varchar(255) not null,
nome_fantasia varchar(50),
id_endereco int not null,
produto_fornecido varchar(50) not null,
constraint foreign key (id_endereco) references endereço(id_endereco)
);

create table categoria (
id_categoria int primary key not null,
nome_categoria varchar(45) not null,
descricao_cat text
);

create table produto (
id_produto int auto_increment key not null,
nome_produto varchar(255) not null,
descricao_prod text not null,
valor_produto decimal(10,2) not null,
imagem varchar(255),
id_categoria int not null,
avaliacao int,
id_fornecedor int not null,
constraint foreign key (id_categoria) references categoria(id_categoria),
constraint foreign key (id_fornecedor) references fornecedor(id_fornecedor)
);

create table pedido (
id_pedido int primary key not null,
id_usuario int not null,
data_pedido date not null,
status_pedido enum('Pendente', 'Aprovado', 'Enviado', 'Entregue', 'Cancelado', 'Não Entregue') not null,
total_pedido decimal(10,2) not null,
id_endereco int not null,
constraint foreign key (id_usuario) references usuário(id_usuario),
constraint foreign key (id_endereco) references endereço (id_endereco)
);

create table estoque (
id_estoque int primary key not null,
id_produto int not null,
data_entrada date,
data_atualizada date,
constraint foreign key (id_produto) references produto(id_produto)
);

create table produto_has_pedido (
    id_produto int not null,
    id_pedido int not null,
    quantidade int not null,
    primary key (id_produto, id_pedido),
	foreign key (id_produto) references produto(id_produto),
    foreign key (id_pedido) references pedido(id_pedido)
);

create table avaliações (
id_avaliacao int primary key not null auto_increment,
id_usuario int not null,
id_produto int not null,
comentario text,
data_avaliacao datetime,
constraint foreign key (id_usuario) references usuário(id_usuario),
constraint foreign key (id_produto) references produto(id_produto)
);