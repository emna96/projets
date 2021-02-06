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
    public partial class Form4 : Form
    {
        MySqlConnection connexion;
        public Form4()
        {
            InitializeComponent();
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {

        }

        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void panel1_Paint(object sender, PaintEventArgs e)
        {

        }

        private void Form4_Load(object sender, EventArgs e)
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

        private void done_Click(object sender, EventArgs e)
        {


            {

                MySqlCommand cmd = new MySqlCommand("INSERT INTO reservation (id_equipe ,id_music,	id_local,  id_aliment)" +
                    "VALUES('" + comboBox1.SelectedIndex + "','" + comboBox2.SelectedIndex + "','" + comboBox3.SelectedIndex + "','" + comboBox4.SelectedIndex + "')", this.connexion);

                try
                {
                    int r = cmd.ExecuteNonQuery();

                    if (r != 0)
                    {
                        MessageBox.Show("reservation bien ajouté", "ajout", MessageBoxButtons.OK, MessageBoxIcon.Information);

                    }
                    else
                    {
                        MessageBox.Show("erreur reservation");
                    }
                }
                catch (Exception ex)

                {
                    MessageBox.Show(ex.Message);

                }
            }
        }

        private void comboBox1_SelectedIndexChanged_1(object sender, EventArgs e)
        {


        }

        private void calcule_Click(object sender, EventArgs e)
        {

            double n2;
            Convert.ToString(btn_prix.Text);
            if (btn_prix.Text == "")
            {

                MessageBox.Show("Veuillez saisir le BUDGET ", "Attention", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
            else
            {
                double n1 = Convert.ToDouble(btn_prix.Text);
                n2 = n1 * 0.2;
                btn_result.Text = (n1 - n2).ToString();
            }
        }

        private void exit_Click(object sender, EventArgs e)
        {
            Form7 myf = new Form7();
            myf.Show();
        }
    }
}
            


