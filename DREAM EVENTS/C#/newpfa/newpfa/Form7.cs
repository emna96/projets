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
    public partial class Form7 : Form
    {
        MySqlConnection connexion;
        public Form7()
        {
            InitializeComponent();
        }

        private void Form7_Load(object sender, EventArgs e)
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

        private void connect_Click(object sender, EventArgs e)
        {
            if (comboBox2.SelectedIndex == 0)
            {
              
                 Form2 myf = new Form2();
                myf.Show();
            }
            if (comboBox2.SelectedIndex == 1)
            {
                Form8 myf = new Form8();
                myf.Show();
            }

            if (comboBox2.SelectedIndex == 2)
            {
                Form3 myf = new Form3();
                myf.Show();
            }
            if (nom.Text.Trim() == "")
            {
                MessageBox.Show("Veuillez Veuillez saisir le nom ");
                return;
            }
            if (password.Text.Trim() == "")
            {
                MessageBox.Show("Veuillez saisir le mot de passe ");
                return;
            }
            string sql = " SELECT * FROM utilisateur WHERE nom= '" + nom.Text.Trim() + "'  AND  password=MD5 ( '" + password.Text.Trim() + "') ";
            MySqlCommand commande = new MySqlCommand(sql, this.connexion);
            try
            {
                MySqlDataReader reader = commande.ExecuteReader();
                if (reader.HasRows)
                {
                    reader.Read();
                    string nom = reader.GetString("nom");
                    Form1 p = new Form1();
                    p.Text = " bonjour" + nom;
                    p.Show();
                    this.Hide();

                }
               
                reader.Close();
            }
            catch (MySqlException ex)
            {
                MessageBox.Show(ex.Message);
            }
            
        }

        private void exit_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void comboBox2_SelectedIndexChanged(object sender, EventArgs e)
        {

        }
    }
}

