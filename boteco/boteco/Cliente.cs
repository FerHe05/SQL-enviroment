using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data.SqlClient;

namespace boteco
{
    class Cliente
    {
        public int Id { get; set; }         //|  
        public string nome { get; set; }    //|  
        public string cpf { get; set; }  //|  
        public string data_nascimento { get; set; }//|    Esse é o construtor, que deve seguir o banco de dados.
        public string celular { get; set; } //| 
    
        SqlConnection con = new SqlConnection(@"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=C:\Users\Aluno\Desktop\boteco\boteco\DbBoteco.mdf;Integrated Security=True");
        public List<Cliente> listaclientes()
        {
            List<Cliente> li = new List<Cliente>();
            string sql = "SELECT * FROM Cliente";
            con.Open();
            SqlCommand cmd = new SqlCommand(sql, con);
            SqlDataReader dr = cmd.ExecuteReader();
            while (dr.Read())
            {
                Cliente p = new Cliente();
                p.Id = (int)dr["Id"];
                p.nome = dr["nome"].ToString();
                p.cpf = dr["cpf"].ToString();          
                p.data_nascimento = dr["data_nascimento"].ToString();
                p.celular = dr["celular"].ToString();

                li.Add(p);
            }
            dr.Close();
            con.Close();
            return li;
        }

        public void Inserir(string nome, string cpf, string data_nascimento, string celular)
        {
            string sql = "INSERT INTO Cliente(nome,cpf,data_nascimento,celular) VALUES ('" + nome + "','" + cpf + "','" + data_nascimento + "','" + celular +"')";
            con.Open();
            SqlCommand cmd = new SqlCommand(sql, con);
            cmd.ExecuteNonQuery();
            con.Close();
        }

        public void Atualizar(int Id, string nome, string cpf, string data_nascimento, string celular)
        {
            string sql = "UPDATE Cliente SET nome='" + nome + "',cpf='" + cpf + "',data_nascimento='" + data_nascimento + "',celular='" + celular + "' WHERE Id='" + Id + "'";
            con.Open();
            SqlCommand cmd = new SqlCommand(sql, con);
            cmd.ExecuteNonQuery();
            con.Close();
        }

        public void Excluir(int Id) // usa o construtor
        {
            string sql = "DELETE FROM Cliente WHERE Id='" + Id + "'";
            con.Open();
            SqlCommand cmd = new SqlCommand(sql, con);
            cmd.ExecuteNonQuery();
            con.Close();
        }

        public void Localizar(int Id)
        {
            string sql = "SELECT * FROM Cliente WHERE Id='" + Id + "'";
            con.Open();
            SqlCommand cmd = new SqlCommand(sql, con);
            SqlDataReader dr = cmd.ExecuteReader();
            while (dr.Read())
            {
                nome = dr["nome"].ToString();
                cpf = dr["cpf"].ToString();
                data_nascimento = dr["data_nascimento"].ToString();
                celular = dr["celular"].ToString();         
            }
            dr.Close();
            con.Close();
        }
        public bool RegistroRepetido(string nome, string cpf, string data_nascimento, string celular)
        {
            string sql = "SELECT * FROM Cliente WHERE nome='" + nome + "' AND cpf='" + cpf + "' AND data_nascimento ='" + data_nascimento + "' AND celular='" + celular +"'";
            con.Open();
            SqlCommand cmd = new SqlCommand(sql, con);
            cmd.ExecuteNonQuery();
            var result = cmd.ExecuteScalar();
            if (result != null)
            {
                return (int)result > 0;
            }
            con.Close();
            return false;
        }
    }
}
