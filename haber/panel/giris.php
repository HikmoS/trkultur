<?php
require_once("ayar.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
<?php

  $username = trim($_POST['KullaniciAdi']);
  $password = md5($_POST['KullaniciSifre']);
  $sql = $db->prepare("SELECT * FROM yazar WHERE KullaniciAdi=? AND KullaniciSifre=?");
  $sql -> execute(array(($username),($password)));
  if($num_rows = $sql->fetchColumn()){
	  $admin = $_SESSION['admin'] = $username;
	  echo "Hosgeldiniz Sayın <h3><strong>'$username'</h3> Giris yapıldı yönlendiriliyorsunuz";
	  header("refresh:4; url=yonetim.php");
  }else{
	  echo "Kullanıcı Adınız ve Sifreniz Yanlış!";
	  echo "<br><h3>Login Ekranına Yönlendiriliyorsunuz</h3>";
	  header("refresh:3; url=kayit.php");
  }
?>
</body>

</html>