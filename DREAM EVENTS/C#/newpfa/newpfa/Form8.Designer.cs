namespace newpfa
{
    partial class Form8
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.Afficher = new System.Windows.Forms.Button();
            this.Inser = new System.Windows.Forms.Button();
            this.modifier = new System.Windows.Forms.Button();
            this.recherche = new System.Windows.Forms.Button();
            this.liste_equipe = new System.Windows.Forms.DataGridView();
            this.label1 = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.id_equipe = new System.Windows.Forms.TextBox();
            this.nom_equipe = new System.Windows.Forms.TextBox();
            this.nbr_equipe = new System.Windows.Forms.TextBox();
            this.id_event = new System.Windows.Forms.TextBox();
            this.suppression = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.liste_equipe)).BeginInit();
            this.SuspendLayout();
            // 
            // Afficher
            // 
            this.Afficher.BackColor = System.Drawing.Color.Tan;
            this.Afficher.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.Afficher.Font = new System.Drawing.Font("Microsoft Tai Le", 14.25F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Afficher.Location = new System.Drawing.Point(435, 76);
            this.Afficher.Name = "Afficher";
            this.Afficher.Size = new System.Drawing.Size(105, 36);
            this.Afficher.TabIndex = 0;
            this.Afficher.Text = "Afficher";
            this.Afficher.UseVisualStyleBackColor = false;
            this.Afficher.Click += new System.EventHandler(this.Afficher_Click);
            // 
            // Inser
            // 
            this.Inser.BackColor = System.Drawing.Color.Tan;
            this.Inser.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.Inser.Font = new System.Drawing.Font("Microsoft Tai Le", 14.25F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.Inser.Location = new System.Drawing.Point(567, 76);
            this.Inser.Name = "Inser";
            this.Inser.Size = new System.Drawing.Size(105, 36);
            this.Inser.TabIndex = 1;
            this.Inser.Text = "Insert";
            this.Inser.UseVisualStyleBackColor = false;
            this.Inser.Click += new System.EventHandler(this.Inser_Click);
            // 
            // modifier
            // 
            this.modifier.BackColor = System.Drawing.Color.Tan;
            this.modifier.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.modifier.Font = new System.Drawing.Font("Microsoft Tai Le", 14.25F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.modifier.Location = new System.Drawing.Point(435, 129);
            this.modifier.Name = "modifier";
            this.modifier.Size = new System.Drawing.Size(105, 36);
            this.modifier.TabIndex = 2;
            this.modifier.Text = "UPDATE";
            this.modifier.UseVisualStyleBackColor = false;
            this.modifier.Click += new System.EventHandler(this.modifier_Click);
            // 
            // recherche
            // 
            this.recherche.BackColor = System.Drawing.Color.Tan;
            this.recherche.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.recherche.Font = new System.Drawing.Font("Microsoft Tai Le", 14.25F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.recherche.Location = new System.Drawing.Point(567, 129);
            this.recherche.Name = "recherche";
            this.recherche.Size = new System.Drawing.Size(105, 36);
            this.recherche.TabIndex = 3;
            this.recherche.Text = "research";
            this.recherche.UseVisualStyleBackColor = false;
            this.recherche.Click += new System.EventHandler(this.recherche_Click);
            // 
            // liste_equipe
            // 
            this.liste_equipe.AllowUserToAddRows = false;
            this.liste_equipe.AllowUserToDeleteRows = false;
            this.liste_equipe.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.liste_equipe.Location = new System.Drawing.Point(12, 213);
            this.liste_equipe.Name = "liste_equipe";
            this.liste_equipe.ReadOnly = true;
            this.liste_equipe.SelectionMode = System.Windows.Forms.DataGridViewSelectionMode.FullRowSelect;
            this.liste_equipe.Size = new System.Drawing.Size(522, 181);
            this.liste_equipe.TabIndex = 4;
            this.liste_equipe.CellContentClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.liste_equipe_CellContentClick_1);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.BackColor = System.Drawing.Color.Tan;
            this.label1.Font = new System.Drawing.Font("Microsoft Tai Le", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(12, 49);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(74, 21);
            this.label1.TabIndex = 5;
            this.label1.Text = "id equipe";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.BackColor = System.Drawing.Color.Tan;
            this.label2.Font = new System.Drawing.Font("Microsoft Tai Le", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(12, 86);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(93, 21);
            this.label2.TabIndex = 6;
            this.label2.Text = "nom equipe";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.BackColor = System.Drawing.Color.Tan;
            this.label3.Font = new System.Drawing.Font("Microsoft Tai Le", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(12, 129);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(128, 21);
            this.label3.TabIndex = 7;
            this.label3.Text = "nombre membre";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.BackColor = System.Drawing.Color.Tan;
            this.label4.Font = new System.Drawing.Font("Microsoft Tai Le", 12F, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.Location = new System.Drawing.Point(17, 162);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(65, 21);
            this.label4.TabIndex = 8;
            this.label4.Text = "id event";
            // 
            // id_equipe
            // 
            this.id_equipe.Location = new System.Drawing.Point(146, 49);
            this.id_equipe.Name = "id_equipe";
            this.id_equipe.Size = new System.Drawing.Size(166, 20);
            this.id_equipe.TabIndex = 9;
            // 
            // nom_equipe
            // 
            this.nom_equipe.Location = new System.Drawing.Point(146, 86);
            this.nom_equipe.Name = "nom_equipe";
            this.nom_equipe.Size = new System.Drawing.Size(166, 20);
            this.nom_equipe.TabIndex = 10;
            // 
            // nbr_equipe
            // 
            this.nbr_equipe.Location = new System.Drawing.Point(146, 129);
            this.nbr_equipe.Name = "nbr_equipe";
            this.nbr_equipe.Size = new System.Drawing.Size(166, 20);
            this.nbr_equipe.TabIndex = 11;
            // 
            // id_event
            // 
            this.id_event.Location = new System.Drawing.Point(146, 163);
            this.id_event.Name = "id_event";
            this.id_event.Size = new System.Drawing.Size(166, 20);
            this.id_event.TabIndex = 12;
            // 
            // suppression
            // 
            this.suppression.BackColor = System.Drawing.Color.Tan;
            this.suppression.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.suppression.Font = new System.Drawing.Font("Microsoft Tai Le", 14.25F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.suppression.Location = new System.Drawing.Point(492, 171);
            this.suppression.Name = "suppression";
            this.suppression.Size = new System.Drawing.Size(105, 36);
            this.suppression.TabIndex = 13;
            this.suppression.Text = "DELETE";
            this.suppression.UseVisualStyleBackColor = false;
            this.suppression.Click += new System.EventHandler(this.suppression_Click);
            // 
            // Form8
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.Wheat;
            this.ClientSize = new System.Drawing.Size(800, 397);
            this.Controls.Add(this.suppression);
            this.Controls.Add(this.id_event);
            this.Controls.Add(this.nbr_equipe);
            this.Controls.Add(this.nom_equipe);
            this.Controls.Add(this.id_equipe);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.liste_equipe);
            this.Controls.Add(this.recherche);
            this.Controls.Add(this.modifier);
            this.Controls.Add(this.Inser);
            this.Controls.Add(this.Afficher);
            this.Name = "Form8";
            this.Text = "Form8";
            this.Load += new System.EventHandler(this.Form8_Load);
            ((System.ComponentModel.ISupportInitialize)(this.liste_equipe)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button Afficher;
        private System.Windows.Forms.Button Inser;
        private System.Windows.Forms.Button modifier;
        private System.Windows.Forms.Button recherche;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.TextBox id_equipe;
        private System.Windows.Forms.TextBox nom_equipe;
        private System.Windows.Forms.TextBox nbr_equipe;
        private System.Windows.Forms.TextBox id_event;
        private System.Windows.Forms.Button suppression;
        public System.Windows.Forms.DataGridView liste_equipe;
    }
}