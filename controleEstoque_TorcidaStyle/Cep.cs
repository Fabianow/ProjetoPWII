using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace controledeestoque
{
    public class Cep
    {
        public string CEP{ get; set; }
        public string Logradouro { get; set; }
        public string TipoLog { get; set; }
        public string Bairro { get; set; }
        public string Cidade { get; set; }
        public string Estado { get; set; }

        public Cep(string CEP, string logradouro, string tipoLog, string cidade, string estado)
        {
            CEP = CEP;
            Logradouro = logradouro;
            TipoLog = tipoLog;
            Cidade = cidade;
            Estado = estado;
        }
    }

}
