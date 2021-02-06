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
    public partial class Form8 : Form
    {
        MySqlConnection connexion;
        public Form8()
        {
            InitializeComponent();
        }

        private void Form8_Load(object sender, EventArgs e)
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
        private void afficher()
        {
            string sql = "SELECT * FROM equipe";
            try
            {
                MySqlDataAdapter adapter = new MySqlDataAdapter(sql, this.connexion);
                DataSet dataset = new DataSet();
                adapter.Fill(dataset);
                DataTable table = dataset.Tables[0];
                liste_equipe.DataSource = table;
            }
            catch (MySqlException ex)
            {
                MessageBox.Show(ex.Message);
            }
        }
        private void Vider()
        {
            id_equipe.Text = "";
            nom_equipe.Text = "";
            nbr_equipe.Text = "";
            id_event.Text = "";
        }

        private void Afficher_Click(object sender, EventArgs e)
        {
            afficher();
        }

        private void Inser_Click(object sender, EventArgs e)
        {
            bool error = false;
            if (id_equipe.Text.Trim() == "")
            {
                error = true;
                MessageBox.Show("veuillez saisir id equipe", "Erreur", MessageBoxButtons.OK, MessageBoxIcon.Error);
                id_equipe.Focus();
            }
            if (nom_equipe.Text.Trim() == "")
            {
                error = true;
                MessageBox.Show("veuillez saisir le nom de equipe", "Erreur", MessageBoxButtons.OK, MessageBoxIcon.Error);
                nom_equipe.Focus();
            }
            if (nbr_equipe.Text.Trim() == "")
            {
                error = true;
                MessageBox.Show("veuillez saisir nombre de equipe", "Erreur", MessageBoxButtons.OK, MessageBoxIcon.Error);
                nbr_equipe.Focus();
            }
            if (id_event.Text.Trim() == "")
            {
                error = true;
                MessageBox.Show("veuillez saisir id event", "Erreur", MessageBoxButtons.OK, MessageBoxIcon.Error);
                id_event.Focus();
            }
            if (!error)
            {

                MySqlCommand cmd = new MySqlCommand("INSERT INTO equipe (id_equipe,nom_equipe,nbr_equipe,id_event)" +
                   "VALUES('" + id_equipe.Text.ToString().Trim() + "','" + nom_equipe.Text.ToString().Trim() + "','" + nbr_equipe.Text.ToString().Trim() + "','" + id_event.Text.ToString().Trim() + "')", this.connexion);


                try
                {
                    int r = cmd.ExecuteNonQuery();

                    if (r != 0)
                    {
                        MessageBox.Show("insertion avec succée", "ajout", MessageBoxButtons.OK, MessageBoxIcon.Information);
                        Vider();
                        afficher();
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


        }
        private void liste_equipe_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            id_equipe.Text = liste_equipe.CurrentRow.Cells[0].Value.ToString();
            nom_equipe.Text = liste_equipe.CurrentRow.Cells[1].Value.ToString();
            nbr_equipe.Text = liste_equipe.CurrentRow.Cells[2].Value.ToString();
            id_event.Text = liste_equipe.CurrentRow.Cells[3].Value.ToString();
        }

        private void suppression_Click(object sender, EventArgs e)
        {
            if (id_equipe.Text.Trim() == "")
            {
                MessageBox.Show("Veuillez sellectionner une equipe ?", "Erreur !", MessageBoxButtons.OK, MessageBoxIcon.Error);
                return;
            }

            if (nom_equipe.Text.Trim() == "")
            {
                MessageBox.Show("Voulez vous vraiment supprimer cette equipe ? ", "Erreur !", MessageBoxButtons.OK, MessageBoxIcon.Error);
                return;
            }
            if (nbr_equipe.Text.Trim() == "")
            {
                MessageBox.Show("Voulez vous vraiment supprimer cette equipe ? ", "Erreur !", MessageBoxButtons.OK, MessageBoxIcon.Error);
                return;
            }
            if (id_event.Text.Trim() == "")
            {
                MessageBox.Show("Voulez vous vraiment supprimer cette equipe ? ", "Erreur !", MessageBoxButtons.OK, MessageBoxIcon.Error);
                return;
            }

            if (MessageBox.Show("Voulez vous supprimer une equipe ?", "suppression", MessageBoxButtons.YesNo, MessageBoxIcon.Question) == DialogResult.Yes) ;
            {
                String Sql = "DELETE FROM equipe WHERE(( id_equipe ='" + id_equipe.Text.Trim() + "' AND  nom_equipe = '" + nom_equipe.Text.Trim() + "' AND nbr_equipe ='" + nbr_equipe.Text.Trim() + "' AND id_event = '" + id_event.Text.Trim() + "'";
                MySqlCommand commande = new MySqlCommand(Sql, this.connexion);

                try
                {
                    int r = commande.ExecuteNonQuery();

                    if (r != 0)
                    {
                        MessageBox.Show("insertion avec succée", "ajout", MessageBoxButtons.OK, MessageBoxIcon.Information);
                        Vider();
                        afficher();
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
        }

        private void modifier_Click(object sender, EventArgs e)
        {
            if (id_equipe.Text.Trim() == "")
            {
                MessageBox.Show("Veuillez sellectionner une equipe ?", "Erreur !", MessageBoxButtons.OK, MessageBoxIcon.Error);
                return;
            }

            if (nom_equipe.Text.Trim() == "")
            {
                MessageBox.Show("Voulez vous vraiment supprimer cette equipe ? ", "Erreur !", MessageBoxButtons.OK, MessageBoxIcon.Error);
                return;
            }
            if (nbr_equipe.Text.Trim() == "")
            {
                MessageBox.Show("Voulez vous vraiment supprimer cette equipe ? ", "Erreur !", MessageBoxButtons.OK, MessageBoxIcon.Error);
                return;
            }
            if (id_event.Text.Trim() == "")
            {
                MessageBox.Show("Voulez vous vraiment supprimer cette equipe ? ", "Erreur !", MessageBoxButtons.OK, MessageBoxIcon.Error);
                return;
            }
            String Sql = "UPDATE SET (( id_equipe ='" + id_equipe.Text.Trim() + "'  AND  nom_equipe = '" + nom_equipe.Text.Trim() + "'  AND  nbr_equipe ='" + nbr_equipe.Text.Trim() + "'  AND  id_event ='" + id_event.Text.Trim() + "'";
            MySqlCommand commande = new MySqlCommand(Sql, this.connexion);
            try
            {
                int x = commande.ExecuteNonQuery();
                if (x > 0)
                {

                    MessageBox.Show("Modification avec succès", "Bravo!", MessageBoxButtons.OK, MessageBoxIcon.Information);
                    Vider();
                    afficher();

                }
                else
                {
                    MessageBox.Show("erreur de Modification ");
                }
            }

            catch (MySqlException ex)
            {
                MessageBox.Show(ex.Message);
            }
        }

        private void recherche_Click(object sender, EventArgs e)
        {
            string sql = " SELECT id as ID , nom as NOM WHERE 1 = 1 ";
            if (nom_equipe.Text.Trim() != "")
            {
                sql += " AND nom_equipe LIKE  '%" + nom_equipe.Text.Trim() + "%'";
            }

            if (id_equipe.Text.Trim() != "")
            {
                sql += " AND id_equipe  LIKE  '%" + id_equipe.Text.Trim() + "%'";
            }

            if (nbr_equipe.Text.Trim() != "")
            {
                sql += " AND nbr_equipe  LIKE  '%" + nbr_equipe.Text.Trim() + "%'";
            }

            if (id_event.Text.Trim() != "")
            {
                sql += " AND id_event LIKE  '%" + id_event.Text.Trim() + "%'";
                try
                {
                    MySqlDataAdapter adapter = new MySqlDataAdapter(sql, this.connexion);
                    DataSet dataset = new DataSet();
                    adapter.Fill(dataset);
                    DataTable table = dataset.Tables[0];
                    liste_equipe.DataSource = table;
                }
                catch (MySqlException ex)
                {
                    MessageBox.Show(ex.Message);
                }
            }
        }

        private void liste_equipe_CellContentClick_1(object sender, DataGridViewCellEventArgs e)
        {
            id_equipe.Text = liste_equipe.CurrentRow.Cells[0].Value.ToString();
            nom_equipe.Text = liste_equipe.CurrentRow.Cells[1].Value.ToString();
            nbr_equipe.Text = liste_equipe.CurrentRow.Cells[2].Value.ToString();
            id_event.Text = liste_equipe.CurrentRow.Cells[3].Value.ToString();
        }
    }
}
        
    
