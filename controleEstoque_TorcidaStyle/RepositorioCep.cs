using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;

namespace controledeestoque
{
    public class RepositorioCep
    {
        private Conexao conexao = new Conexao();

        public void AdicionarCep(Cep cep)
        {
            using (var conn = conexao.GetConnection())
            {
                conn.Open();
                string query = "INSERT INTO cep (codigo_cep, logradouro, tipo_log, bairro, cidade) VALUES (@CEP, @logradouro, @tipoLog, @bairro, @cidade, @estado)";
                using (var cmd = new MySqlCommand(query, conn))
                {
                    cmd.Parameters.AddWithValue("@CEP", cep.CEP);
                    cmd.Parameters.AddWithValue("@logradouro", cep.Logradouro);
                    cmd.Parameters.AddWithValue("@tipoLog", cep.TipoLog);
                    cmd.Parameters.AddWithValue("@bairro", cep.Bairro);
                    cmd.Parameters.AddWithValue("@cidade", cep.Cidade);
                    cmd.Parameters.AddWithValue("@estado", cep.Estado);
                    cmd.ExecuteNonQuery();
                }
            }
            Console.WriteLine("CEP adicionado com sucesso.");
        }

        public List<Cep> ObterCeps()
        {
            List<Cep> ceps = new List<Cep>();
            using (var conn = conexao.GetConnection())
            {
                conn.Open();
                string query = "SELECT * FROM cep";
                using (var cmd = new MySqlCommand(query, conn))
                {
                    using (var reader = cmd.ExecuteReader())
                    {
                        while (reader.Read())
                        {
                            Cep cep = new Cep(
                                reader.GetString("codigo_cep"),
                                reader.GetString("logradouro"),
                                reader.GetString("tipo_log"),
                                reader.GetString("bairro"),
                                reader.GetString("cidade"),
                                reader.GetString("estado")
                            );
                            ceps.Add(cep);
                        }
                    }
                }
            }
            return ceps;
        }
    }

}
