using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace boteco
{
    public partial class FrmCliente : Form
    {
        public FrmCliente()
        {
            InitializeComponent();
        }

        private void FrmCliente_Load(object sender, EventArgs e)
        {
            Cliente cliente = new Cliente();
            List<Cliente> pessoas = cliente.listaclientes();
            dgvCliente.DataSource = pessoas;

        }

        private void btnInserir_Click(object sender, EventArgs e)
        {
            try
            {
                if (txtNome.Text == " " && txtNome.Text == " " && txtCpf.Text == " " && txtData_nascimento.Text == " " && txtCelular.Text == " ") // abre condicional para verficar se o usuario digitou alguma coisa no form
                {
                    MessageBox.Show("Por Favor, preencha o formulário para inserir!");
                    this.txtNome.Focus();
                }
                else
                {
                    Cliente cliente = new Cliente(); //verifica se o que o usuario botou no banco de dados se já existe lá dentro, se já tem ele lá ira mostrar a mensagem abaixo e deixara os campos brancos.
                    if (cliente.RegistroRepetido(txtNome.Text, txtCpf.Text, txtData_nascimento.Text, txtCelular.Text) != false)
                    {
                        MessageBox.Show("Este cliente já está em nossa base de dados!");
                        this.txtNome.Focus();
                    }
                    else // se não ele insire os dados e mostra uma mensage.
                    {
                        cliente.Inserir(txtNome.Text, txtCpf.Text, txtData_nascimento.Text, txtCelular.Text);
                        MessageBox.Show("Cliente registrado com sucesso!");
                        List<Cliente> clientes = cliente.listaclientes();
                        dgvCliente.DataSource = clientes;
                        txtNome.Text = "";
                        txtCpf.Text = "";
                        txtData_nascimento.Text = "";
                        txtCelular.Text = "";
                        this.txtNome.Focus();
                    }
                }
            }
            catch (Exception er)
            {
                MessageBox.Show(er.Message);
            }







        }

        private void dgvCliente_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

        private void dgvCliente_CellClick(object sender, DataGridViewCellEventArgs e)
        {
            if (e.RowIndex > 0) { 
            DataGridViewRow row = this.dgvCliente.Rows[e.RowIndex];
            row.Selected = true;
            txtId.Text = row.Cells[0].Value.ToString();
            txtNome.Text = row.Cells[1].Value.ToString();
            txtCpf.Text = row.Cells[2].Value.ToString();
            txtData_nascimento.Text = row.Cells[3].Value.ToString();
            txtCelular.Text = row.Cells[4].Value.ToString();
        }
        btnAtualizar.Enabled = true;
                 btnExcluir.Enabled = true;
           
  }

        private void btnAtualizar_Click(object sender, EventArgs e)
        {
        
        }

        private void dgvCliente_CellContentClick_1(object sender, DataGridViewCellEventArgs e)
        {

        }

        private void btnAtualizar_Click_1(object sender, EventArgs e)
        {
            int Id = Convert.ToInt32(txtId.Text.Trim()); // O ''Trim'' retira os espaço dos campos.
            Cliente cliente = new Cliente();
            cliente.Atualizar(Id, txtNome.Text, txtCpf.Text, txtData_nascimento.Text, txtCelular.Text);
            MessageBox.Show("Cliente atualizada com sucesso!");
            List<Cliente> clientes = cliente.listaclientes();
            dgvCliente.DataSource = clientes;
            txtNome.Text = "";
            txtCpf.Text = "";
            txtData_nascimento.Text = "";
            txtCelular.Text = "";
            txtId.Text = "";
            this.txtNome.Focus();
            btnAtualizar.Enabled = false;
            btnExcluir.Enabled = false;
        }

        private void btnExcluir_Click(object sender, EventArgs e)
        {
            int Id = Convert.ToInt32(txtId.Text.Trim());
            Cliente cliente = new Cliente();
            cliente.Excluir(Id);
            MessageBox.Show("Cliente excluída com sucesso!");
            List<Cliente> pessoas = cliente.listaclientes();
            dgvCliente.DataSource = pessoas;
            txtId.Text = "";
            txtNome.Text = "";
            txtCpf.Text = "";
            txtData_nascimento.Text = "";
            txtCelular.Text = "";
            txtId.Text = "";
            btnAtualizar.Enabled = true;
            btnExcluir.Enabled = true;
        }

        private void btnSair_Click(object sender, EventArgs e)
        {
            DialogResult dialog = new DialogResult();
            dialog = MessageBox.Show("Deseja realmente sair?", "Sair da Aplicação", MessageBoxButtons.YesNo);
            if (dialog == DialogResult.Yes)

            {
                Application.Exit();

            }
        }
    }
}
