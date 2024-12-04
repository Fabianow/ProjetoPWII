insert into usuário (id_usuario, nome, email, senha, celular) values
(1, 'João Silva', 'joao.silva@email.com', 'senha123', '11999999999'),
(2, 'Maria Oliveira', 'maria.oliveira@email.com', 'maria2023', '21988888888'),
(3, 'Carlos Souza', 'carlos.souza@email.com', 'car1234sou', '31977777777'),
(4, 'Ana Pereira', 'ana.pereira@email.com', 'ana456789', '41966666666'),
(5, 'Pedro Costa', 'pedro.costa@email.com', 'pedro7890', '51955555555');

insert into cep (id_cep, codigo_cep, logradouro, tipo_log, bairro, cidade, estado) values
(1, '01001-000', 'Praça da Sé', 'Praça', 'Sé', 'São Paulo', 'SP'),
(2, '20040-002', 'Avenida Rio Branco', 'Avenida', 'Centro', 'Rio de Janeiro', 'RJ'),
(3, '30130-010', 'Rua dos Guajajaras', 'Rua', 'Centro', 'Belo Horizonte', 'MG'),
(4, '40060-001', 'Rua Chile', 'Rua', 'Comércio', 'Salvador', 'BA'),
(5, '60010-290', 'Avenida Domingos Olímpio', 'Avenida', 'Benfica', 'Fortaleza', 'CE');

insert into endereço (id_endereco, id_cep, complemento, numero) values
(1, 1, 'Apto 101', 100),
(2, 2, 'Bloco B', 210),
(3, 3, 'Casa 12', 45),
(4, 4, 'Torre Norte', 900),
(5, 5, 'Sala 5', 150);

insert into fornecedor (id_fornecedor, razao_social, nome_fantasia, id_endereco, produto_fornecido) values
(1, 'Fornecedores Santos Ltda.', 'Santos Store', 1, 'Vestuário do Santos'),
(2, 'Fornecedores São Paulo Ltda.', 'SPFC Store', 2, 'Vestuário do São Paulo'),
(3, 'Fornecedores Corinthians Ltda.', 'Corinthians Shop', 3, 'Vestuário do Corinthians'),
(4, 'Fornecedores Flamengo Ltda.', 'Flamengo Store', 4, 'Vestuário do Flamengo'),
(5, 'Fornecedores Palmeiras Ltda.', 'Palmeiras Shop', 5, 'Vestuário do Palmeiras');

insert into produto (id_produto, nome_produto, descricao_prod, valor_produto, id_categoria, qntd_produto, id_fornecedor) values
(1, 'Camiseta Santos', 'Camiseta oficial do Santos FC', 89.90, 1, 150, 1),
(2, 'Camiseta São Paulo', 'Camiseta oficial do São Paulo FC', 89.90, 1, 120, 2),
(3, 'Camiseta Corinthians', 'Camiseta oficial do Corinthians', 89.90, 1, 100, 3),
(4, 'Camiseta Flamengo', 'Camiseta oficial do Flamengo', 89.90, 1, 130, 4),
(5, 'Camiseta Palmeiras', 'Camiseta oficial do Palmeiras', 89.90, 1, 140, 5),
(6, 'Boné Santos', 'Boné oficial do Santos FC', 49.90, 1, 200, 1),
(7, 'Boné São Paulo', 'Boné oficial do São Paulo FC', 49.90, 3, 200, 2),
(8, 'Boné Corinthians', 'Boné oficial do Corinthians', 49.90, 3, 200, 3),
(9, 'Boné Flamengo', 'Boné oficial do Flamengo', 49.90, 3, 200, 4),
(10, 'Boné Palmeiras', 'Boné oficial do Palmeiras', 49.90, 3, 200, 5);

insert into categoria (id_categoria, nome_categoria, descricao_cat) values
(1, 'Camisas', 'Camisas oficiais dos times de futebol'),
(2, 'Conjuntos', 'Conjuntos oficiais dos times de futebol'), 
(3, 'Acessórios', 'Bonés, toalhas e outros acessórios relacionados aos times de futebol');

insert into pedido (id_pedido, id_usuario, data_pedido, status_pedido, total_pedido, id_endereco) values
(1, 1, '2023-10-01', 'Aprovado', 180.00, 1),
(2, 2, '2023-10-02', 'Enviado', 140.00, 2),
(3, 3, '2023-10-03', 'Pendente', 89.90, 3),
(4, 4, '2023-10-04', 'Cancelado', 0.00, 4),
(5, 5, '2023-10-05', 'Entregue', 49.90, 5);

insert into estoque (id_estoque, id_produto, data_entrada, data_atualizada) values
(1, 1, '2024-09-01', '2024-09-15'),
(2, 2, '2024-09-05', '2024-09-20'),
(3, 3, '2024-09-10', '2024-09-22'),
(4, 4, '2024-09-15', '2024-09-25'),
(5, 5, '2024-09-20', '2024-09-30'),
(6, 6, '2024-09-25', '2024-09-28'),
(7, 7, '2024-09-25', '2024-09-28'),
(8, 8, '2024-09-25', '2024-09-28'),
(9, 9, '2024-09-25', '2024-09-28'),
(10, 10, '2024-09-25', '2024-09-28');

insert into produto_has_pedido (id_produto, id_pedido, quantidade) values
(1, 1, 2),  -- 2 Camisetas Santos
(2, 2, 1),  -- 1 Camiseta São Paulo
(3, 3, 3),  -- 3 Camiseta Corinthians
(4, 4, 1),  -- 1 Camiseta Flamengo
(5, 5, 1),  -- 1 Camiseta Palmeiras
(6, 1, 1),  -- 1 Boné Santos
(7, 2, 1),  -- 1 Boné São Paulo
(8, 3, 1),  -- 1 Boné Corinthians
(9, 4, 1),  -- 1 Boné Flamengo
(10, 5, 1); -- 1 Boné Palmeiras

insert into avaliações (id_avaliacao, id_usuario, id_produto, comentario, data_avaliacao) values
(1, 1, 1, 'Ótima qualidade!', '2023-10-01 10:00:00'),
(2, 2, 2, 'Camiseta bem feita, recomendo!', '2023-10-02 11:00:00'),
(3, 3, 3, 'Produto chegou rápido!', '2023-10-03 12:00:00'),
(4, 4, 4, 'Perfeito para torcer pelo meu time!', '2023-10-04 13:00:00'),
(5, 5, 5, 'Adorei o boné!', '2023-10-05 14:00:00');