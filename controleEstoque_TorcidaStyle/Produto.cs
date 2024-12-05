using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace controledeestoque
{
    public class Produto
    {
        public int Id { get; set; }
        public string Nome { get; set; }
        public int Categoria { get; set; }
        public decimal Valor { get; set; }
        public string Descricao { get; set; }
        public string Imagem { get; set; }
        public int Avaliacao { get; set; }
        public int Fornecedor { get; set; }
        public int Quantidade { get; set; }

        public Produto(int id, string nome, int categoria, decimal valor, string descricao, string imagem, int avaliacao, int fornecedor, int quantidade)
        {
            Id = id;
            Nome = nome;
            Categoria = categoria;
            Valor = valor;
            Descricao = descricao;
            Imagem = imagem;
            Avaliacao = avaliacao;
            Fornecedor = fornecedor;
            Quantidade = quantidade;
        }
    }

}
