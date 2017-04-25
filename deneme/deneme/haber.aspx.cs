using System;
using System.Collections.Generic;
using System.Configuration;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
namespace deneme
{
    public partial class haber : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            Encokokunangetir();
        }
        private void Encokokunangetir()
        {
            SqlConnection cnn = new SqlConnection(ConfigurationManager.ConnectionStrings["mydata"].ConnectionString);
            string sorgu = "Select * from encokokunan order by tarih";
            SqlCommand cmd = new SqlCommand(sorgu, cnn);
            cnn.Open();

            SqlDataReader dr = cmd.ExecuteReader();
            lstokunan.DataSource = dr;
            lstokunan.DataBind();

            cnn.Close();
        }
    }
}