using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;

namespace controledeestoque
{


    public class RepositorioProduto
    {
        private Conexao conexao = new Conexao();

        public void AdicionarProduto(Produto produto)
        {
            using (var conn = conexao.GetConnection())
            {
                conn.Open();
                string query = "INSERT INTO produto (nome_produto, descricao_prod, valor_produto, id_categoria, imagem, avaliacao, id_fornecedor, quantidade) VALUES (@nome, @descricao, @valor, @categoria, @imagem, @avaliacao, @fornecedor, @quantidade)";
                using (var cmd = new MySqlCommand(query, conn))
                {
                    cmd.Parameters.AddWithValue("@nome", produto.Nome);
                    cmd.Parameters.AddWithValue("@descricao", produto.Descricao);
                    cmd.Parameters.AddWithValue("@categoria", produto.Categoria);
                    cmd.Parameters.AddWithValue("@valor", produto.Valor);
                    cmd.Parameters.AddWithValue("@categoria", produto.Categoria);
                    cmd.Parameters.AddWithValue("@imagem", produto.Imagem);
                    cmd.Parameters.AddWithValue("@avaliacao", produto.Avaliacao);
                    cmd.Parameters.AddWithValue("@fornecedor", produto.Fornecedor);
                    cmd.Parameters.AddWithValue("@quantidade", produto.Quantidade);
                    cmd.ExecuteNonQuery();
                }
            }
            Console.WriteLine("Produto adicionado com sucesso.");
        }

        public List<Produto> ObterProdutos()
        {
            List<Produto> produtos = new List<Produto>();
            using (var conn = conexao.GetConnection())
            {
                conn.Open();
                string query = "SELECT * FROM produto";
                using (var cmd = new MySqlCommand(query, conn))
                {
                    using (var reader = cmd.ExecuteReader())
                    {
                        while (reader.Read())
                        {
                            Produto produto = new Produto(
                                reader.GetInt32("id_produto"),
                                reader.GetString("nome_produto"),
                                reader.GetString("descricao_prod"),
                                reader.GetDecimal("valor_produto"),
                                reader.GetInt32("id_categoria"),
                                reader.GetString("imagem"),
                                reader.GetInt32("avaliacao"),
                                reader.GetInt32("id_fornecedor"),
                                reader.GetInt32("quantidade")
                            );
                            produtos.Add(produto);
                        }
                    }
                }
            }
            return produtos;
        }

        public Produto ObterProdutoPorId(int id)
        {
            using (var conn = conexao.GetConnection())
            {
                conn.Open();
                string query = "SELECT * FROM produto WHERE id_produto = @id";
                using (var cmd = new MySqlCommand(query, conn))
                {
                    cmd.Parameters.AddWithValue("@id", id);
                    using (var reader = cmd.ExecuteReader())
                    {
                        if (reader.Read())
                        {
                            return new Produto(
                                reader.GetInt32("id_produto"),
                                reader.GetString("nome_produto"),
                                reader.GetString("descricao_prod"),
                                reader.GetDecimal("valor_produto"),
                                reader.GetInt32("id_categoria"),
                                reader.GetString("imagem"),
                                reader.GetInt32("avaliacao"),
                                reader.GetInt32("id_fornecedor"),
                                reader.GetInt32("quantidade")
                            );
                        }
                    }
                }
            }
            return null;
        }

        public void AtualizarProduto(Produto produtoAtualizado)
        {
            using (var conn = conexao.GetConnection())
            {
                conn.Open();
                string query = "UPDATE produto SET nome_produto = @nome, descricao_prod = @descricao, valor_produto = @valor, id_categoria = @categoria, imagem = @imagem, avaliacao = @avaliacao, id_fornecedor = @fornecedor, quantidade = @quantidade";
                using (var cmd = new MySqlCommand(query, conn))
                {
                    cmd.Parameters.AddWithValue("@nome", produtoAtualizado.Nome);
                    cmd.Parameters.AddWithValue("@descricao", produtoAtualizado.Descricao);
                    cmd.Parameters.AddWithValue("@valor", produtoAtualizado.Valor);
                    cmd.Parameters.AddWithValue("@categoria", produtoAtualizado.Categoria);
                    cmd.Parameters.AddWithValue("@imagem", produtoAtualizado.Imagem);
                    md.Parameters.AddWithValue("@avaliacao", produtoAtualizado.Avaliacao);
                    md.Parameters.AddWithValue("@fornecedor", produtoAtualizado.Fornecedor);
                    md.Parameters.AddWithValue("@quantidade", produtoAtualizado.Quantidade);
                    cmd.Parameters.AddWithValue("@id", produtoAtualizado.Id);
                    cmd.ExecuteNonQuery();
                }
            }
            Console.WriteLine("Produto atualizado com sucesso.");
        }

        public void RemoverProduto(int id)
        {
            using (var conn = conexao.GetConnection())
            {
                conn.Open();
                string query = "DELETE FROM produto WHERE id_produto = @id";
                using (var cmd = new MySqlCommand(query, conn))
                {
                    cmd.Parameters.AddWithValue("@id", id);
                    cmd.ExecuteNonQuery();
                }
            }
            Console.WriteLine("Produto removido com sucesso.");
        }
    }
}
