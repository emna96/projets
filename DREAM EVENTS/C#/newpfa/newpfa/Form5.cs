using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient; // Importer la bibliothèque MySQL
namespace newpfa
{
    public partial class Form5 : Form
    {
        MySqlConnection connexion;
        public Form5()
        {
            InitializeComponent();
        }

        private void panel1_Paint(object sender, PaintEventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            

                MySqlCommand cmd = new MySqlCommand("INSERT INTO utilisateur (nom,prenom,adresse,email,password,mobile,role)" +
                    "VALUES('" + tb_nom.Text.ToString().Trim() + "','" + tb_prenom.Text.ToString().Trim() + "','" + tb_adresse.Text.ToString().Trim() + "','" + tb_email.Text.ToString().Trim() + "','" + tb_password.Text.ToString().Trim() + "','" + tb_mobile.Text.ToString().Trim() + "','" + tb_role.SelectedIndex +"')", this.connexion);

                try
                {
                    int r = cmd.ExecuteNonQuery();

                    if (r != 0)
                    {
                        MessageBox.Show("inscription avec succée", "ajout", MessageBoxButtons.OK, MessageBoxIcon.Information);
                       
                    }
                    else
                    {
                        MessageBox.Show("erreur ");
                    }
                }
                catch (Exception ex)
                {
                    MessageBox.Show(ex.Message);

                }
            }

        private void Form5_Load(object sender, EventArgs e)
        {
            this.connexion = new MySqlConnection();
            this.connexion.ConnectionString = "server=localhost;uid=root;pwd=;database=events";
            try
            {
                this.connexion.Open();
            }
            catch (MySqlException exception)
            {
                MessageBox.Show("Erreur de connexion");
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            tb_nom.Text = "";
            tb_prenom.Text = "";
            tb_adresse.Text = "";
            tb_email.Text = "";
            tb_password.Text = "";
            tb_mobile.Text = "";
            tb_role.SelectedIndex = -1;
        }
    }
    }

