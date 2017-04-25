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
    public partial class main1 : System.Web.UI.MasterPage
    {
        protected void Page_Load(object sender, EventArgs e)
        {

            Encokokunangetir();
            yenihaber();
            haber();
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

        private void yenihaber()
        {
            SqlConnection cnn = new SqlConnection(ConfigurationManager.ConnectionStrings["mydata"].ConnectionString);
            string sorgu = "Select * from yhaber order by tarih";
            SqlCommand cmd = new SqlCommand(sorgu, cnn);
            cnn.Open();

            SqlDataReader dr = cmd.ExecuteReader();
            lstyeni.DataSource = dr;
            lstyeni.DataBind();

            cnn.Close();
        }
        private void haber()
        {
            SqlConnection cnn = new SqlConnection(ConfigurationManager.ConnectionStrings["mydata"].ConnectionString);
            string sorgu = "SELECT * FROM gündem ORDER by tarih";
            SqlCommand cmd = new SqlCommand(sorgu, cnn);
            cnn.Open();

            SqlDataReader dr = cmd.ExecuteReader();
            lsthaber.DataSource = dr;
            lsthaber.DataBind();

            cnn.Close();
        }
    }
}