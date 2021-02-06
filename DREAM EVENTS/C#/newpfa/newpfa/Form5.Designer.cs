namespace newpfa
{
    partial class Form5
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
            this.panel1 = new System.Windows.Forms.Panel();
            this.role = new System.Windows.Forms.Label();
            this.email = new System.Windows.Forms.Label();
            this.password = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.adresse = new System.Windows.Forms.Label();
            this.prenom = new System.Windows.Forms.Label();
            this.tb_password = new System.Windows.Forms.TextBox();
            this.tb_email = new System.Windows.Forms.TextBox();
            this.tb_adresse = new System.Windows.Forms.TextBox();
            this.tb_prenom = new System.Windows.Forms.TextBox();
            this.nom = new System.Windows.Forms.Label();
            this.tb_nom = new System.Windows.Forms.TextBox();
            this.mobile = new System.Windows.Forms.Label();
            this.tb_mobile = new System.Windows.Forms.TextBox();
            this.tb_role = new System.Windows.Forms.ComboBox();
            this.button1 = new System.Windows.Forms.Button();
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.button2 = new System.Windows.Forms.Button();
            this.panel1.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            this.SuspendLayout();
            // 
            // panel1
            // 
            this.panel1.Controls.Add(this.button2);
            this.panel1.Controls.Add(this.button1);
            this.panel1.Controls.Add(this.tb_role);
            this.panel1.Controls.Add(this.tb_mobile);
            this.panel1.Controls.Add(this.mobile);
            this.panel1.Controls.Add(this.tb_nom);
            this.panel1.Controls.Add(this.nom);
            this.panel1.Controls.Add(this.role);
            this.panel1.Controls.Add(this.email);
            this.panel1.Controls.Add(this.password);
            this.panel1.Controls.Add(this.label2);
            this.panel1.Controls.Add(this.adresse);
            this.panel1.Controls.Add(this.prenom);
            this.panel1.Controls.Add(this.tb_password);
            this.panel1.Controls.Add(this.tb_email);
            this.panel1.Controls.Add(this.tb_adresse);
            this.panel1.Controls.Add(this.pictureBox1);
            this.panel1.Controls.Add(this.tb_prenom);
            this.panel1.Location = new System.Drawing.Point(29, 12);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(704, 426);
            this.panel1.TabIndex = 1;
            this.panel1.Paint += new System.Windows.Forms.PaintEventHandler(this.panel1_Paint);
            // 
            // role
            // 
            this.role.AutoSize = true;
            this.role.Font = new System.Drawing.Font("Segoe UI Semibold", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.role.ForeColor = System.Drawing.Color.Black;
            this.role.Location = new System.Drawing.Point(429, 129);
            this.role.Name = "role";
            this.role.Size = new System.Drawing.Size(42, 21);
            this.role.TabIndex = 15;
            this.role.Text = "Role";
            // 
            // email
            // 
            this.email.AutoSize = true;
            this.email.Font = new System.Drawing.Font("Segoe UI Semibold", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.email.ForeColor = System.Drawing.Color.Black;
            this.email.Location = new System.Drawing.Point(20, 265);
            this.email.Name = "email";
            this.email.Size = new System.Drawing.Size(51, 21);
            this.email.TabIndex = 13;
            this.email.Text = "Email";
            // 
            // password
            // 
            this.password.AutoSize = true;
            this.password.Font = new System.Drawing.Font("Segoe UI Semibold", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.password.ForeColor = System.Drawing.Color.Black;
            this.password.Location = new System.Drawing.Point(20, 311);
            this.password.Name = "password";
            this.password.Size = new System.Drawing.Size(79, 21);
            this.password.TabIndex = 12;
            this.password.Text = "Password";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.ForeColor = System.Drawing.Color.Black;
            this.label2.Location = new System.Drawing.Point(112, 262);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(0, 21);
            this.label2.TabIndex = 11;
            // 
            // adresse
            // 
            this.adresse.AutoSize = true;
            this.adresse.Font = new System.Drawing.Font("Segoe UI Semibold", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.adresse.ForeColor = System.Drawing.Color.Black;
            this.adresse.Location = new System.Drawing.Point(18, 219);
            this.adresse.Name = "adresse";
            this.adresse.Size = new System.Drawing.Size(66, 21);
            this.adresse.TabIndex = 10;
            this.adresse.Text = "Adresse";
            // 
            // prenom
            // 
            this.prenom.AutoSize = true;
            this.prenom.Font = new System.Drawing.Font("Segoe UI Semibold", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.prenom.ForeColor = System.Drawing.Color.Black;
            this.prenom.Location = new System.Drawing.Point(20, 170);
            this.prenom.Name = "prenom";
            this.prenom.Size = new System.Drawing.Size(66, 21);
            this.prenom.TabIndex = 9;
            this.prenom.Text = "Prenom";
            // 
            // tb_password
            // 
            this.tb_password.ForeColor = System.Drawing.Color.Black;
            this.tb_password.Location = new System.Drawing.Point(116, 314);
            this.tb_password.Multiline = true;
            this.tb_password.Name = "tb_password";
            this.tb_password.Size = new System.Drawing.Size(197, 28);
            this.tb_password.TabIndex = 6;
            // 
            // tb_email
            // 
            this.tb_email.ForeColor = System.Drawing.Color.Black;
            this.tb_email.Location = new System.Drawing.Point(116, 265);
            this.tb_email.Multiline = true;
            this.tb_email.Name = "tb_email";
            this.tb_email.Size = new System.Drawing.Size(197, 28);
            this.tb_email.TabIndex = 5;
            // 
            // tb_adresse
            // 
            this.tb_adresse.ForeColor = System.Drawing.Color.Black;
            this.tb_adresse.Location = new System.Drawing.Point(116, 222);
            this.tb_adresse.Multiline = true;
            this.tb_adresse.Name = "tb_adresse";
            this.tb_adresse.Size = new System.Drawing.Size(197, 28);
            this.tb_adresse.TabIndex = 4;
            // 
            // tb_prenom
            // 
            this.tb_prenom.ForeColor = System.Drawing.Color.Black;
            this.tb_prenom.Location = new System.Drawing.Point(116, 173);
            this.tb_prenom.Multiline = true;
            this.tb_prenom.Name = "tb_prenom";
            this.tb_prenom.Size = new System.Drawing.Size(197, 28);
            this.tb_prenom.TabIndex = 0;
            // 
            // nom
            // 
            this.nom.AutoSize = true;
            this.nom.Font = new System.Drawing.Font("Segoe UI Semibold", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.nom.ForeColor = System.Drawing.Color.Black;
            this.nom.Location = new System.Drawing.Point(23, 122);
            this.nom.Name = "nom";
            this.nom.Size = new System.Drawing.Size(45, 21);
            this.nom.TabIndex = 16;
            this.nom.Text = "Nom";
            // 
            // tb_nom
            // 
            this.tb_nom.ForeColor = System.Drawing.Color.Black;
            this.tb_nom.Location = new System.Drawing.Point(116, 122);
            this.tb_nom.Multiline = true;
            this.tb_nom.Name = "tb_nom";
            this.tb_nom.Size = new System.Drawing.Size(197, 28);
            this.tb_nom.TabIndex = 17;
            // 
            // mobile
            // 
            this.mobile.AutoSize = true;
            this.mobile.Font = new System.Drawing.Font("Segoe UI Semibold", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.mobile.ForeColor = System.Drawing.Color.Black;
            this.mobile.Location = new System.Drawing.Point(18, 356);
            this.mobile.Name = "mobile";
            this.mobile.Size = new System.Drawing.Size(60, 21);
            this.mobile.TabIndex = 18;
            this.mobile.Text = "Mobile";
            // 
            // tb_mobile
            // 
            this.tb_mobile.ForeColor = System.Drawing.Color.Black;
            this.tb_mobile.Location = new System.Drawing.Point(116, 356);
            this.tb_mobile.Multiline = true;
            this.tb_mobile.Name = "tb_mobile";
            this.tb_mobile.Size = new System.Drawing.Size(197, 28);
            this.tb_mobile.TabIndex = 19;
            // 
            // tb_role
            // 
            this.tb_role.FormattingEnabled = true;
            this.tb_role.Items.AddRange(new object[] {
            "admin",
            "planificateur",
            "client"});
            this.tb_role.Location = new System.Drawing.Point(501, 132);
            this.tb_role.Name = "tb_role";
            this.tb_role.Size = new System.Drawing.Size(121, 21);
            this.tb_role.TabIndex = 20;
            // 
            // button1
            // 
            this.button1.BackColor = System.Drawing.Color.Tan;
            this.button1.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.button1.Font = new System.Drawing.Font("MV Boli", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button1.Location = new System.Drawing.Point(476, 227);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(105, 40);
            this.button1.TabIndex = 21;
            this.button1.Text = "LOGin";
            this.button1.UseVisualStyleBackColor = false;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // pictureBox1
            // 
            this.pictureBox1.Image = global::newpfa.Properties.Resources.credit_card;
            this.pictureBox1.Location = new System.Drawing.Point(0, 0);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(142, 119);
            this.pictureBox1.SizeMode = System.Windows.Forms.PictureBoxSizeMode.Zoom;
            this.pictureBox1.TabIndex = 3;
            this.pictureBox1.TabStop = false;
            // 
            // button2
            // 
            this.button2.BackColor = System.Drawing.Color.Tan;
            this.button2.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.button2.Font = new System.Drawing.Font("MV Boli", 12F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.button2.Location = new System.Drawing.Point(476, 327);
            this.button2.Name = "button2";
            this.button2.Size = new System.Drawing.Size(105, 40);
            this.button2.TabIndex = 22;
            this.button2.Text = "RESTART";
            this.button2.UseVisualStyleBackColor = false;
            this.button2.Click += new System.EventHandler(this.button2_Click);
            // 
            // Form5
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.Wheat;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.panel1);
            this.Name = "Form5";
            this.Text = "Form5";
            this.Load += new System.EventHandler(this.Form5_Load);
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Label role;
        private System.Windows.Forms.Label email;
        private System.Windows.Forms.Label password;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label adresse;
        private System.Windows.Forms.Label prenom;
        private System.Windows.Forms.TextBox tb_password;
        private System.Windows.Forms.TextBox tb_email;
        private System.Windows.Forms.TextBox tb_adresse;
        private System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.TextBox tb_prenom;
        private System.Windows.Forms.TextBox tb_nom;
        private System.Windows.Forms.Label nom;
        private System.Windows.Forms.TextBox tb_mobile;
        private System.Windows.Forms.Label mobile;
        private System.Windows.Forms.ComboBox tb_role;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.Button button2;
    }
}