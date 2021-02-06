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
    public partial class Form3 : Form
    {
        MySqlConnection connexion;
        public Form3()
        {
            InitializeComponent();
        }

        private void Form3_Load(object sender, EventArgs e)
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

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void show_Click(object sender, EventArgs e)
        {
            }

        private void button1_Click(object sender, EventArgs e)
        {
            string sql = "SELECT * FROM utilisateur";
            try
            {
                MySqlDataAdapter adapter = new MySqlDataAdapter(sql, this.connexion);
                DataSet dataset = new DataSet();
                adapter.Fill(dataset);
                DataTable table = dataset.Tables[0];
                liste.DataSource = table;
            }
            catch (MySqlException ex)
            {
                MessageBox.Show(ex.Message);
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            string sql = "SELECT * FROM reservation";
            try
            {
                MySqlDataAdapter adapter = new MySqlDataAdapter(sql, this.connexion);
                DataSet dataset = new DataSet();
                adapter.Fill(dataset);
                DataTable table = dataset.Tables[0];
                liste.DataSource = table;
            }
            catch (MySqlException ex)
            {
                MessageBox.Show(ex.Message);
            }
        }

        private void exit_Click(object sender, EventArgs e)
        {
            Form1 myf = new Form1();
            myf.Show();
        }
    }
        }
    
     
