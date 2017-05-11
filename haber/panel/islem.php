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
 if($_POST){
  $ad = trim($_POST['Adi']);
  $soyad = trim($_POST['Soyadi']);
  $email = trim($_POST['E-mail']);
  $username = trim($_POST['KullaniciAdi']);
  $password = trim($_POST['KullaniciSifre']);
  $password2 = md5($password);
  if((empty($ad)) or (empty($soyad)) or (empty($email)) or (empty($username)) or (empty($password))){
	echo "Boş Alan Bırakmayınız";
  }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		  echo "Gecersiz email adresi";
	  }else{
		 $sql = $db -> prepare("SELECT * FROM yazar WHERE KullaniciAdi=? or Email=?");
		 $sql->execute(array(($username),($email)));
		 $sql->fetch(); // sql injection halletcez
		 if($num_rows = $sql->fetchColumn()){
			 echo "Kullanici Adi ya da E-mail daha önceden alındı";
		 }else

		 $veri=$db -> prepare("INSERT INTO yazar (Adi,Soyadi,Email,KullaniciAdi,KullaniciSifre) VALUES (?,?,?,?,?)");
		 $veri -> execute(array(($ad),($soyad),($email),($username),($password2)));
		 $veri->fetch();
			 if($veri){ // sql injection halletcez
			  echo "<h1>Tebrikler</h1>";
			  echo "<p>Kayıt Basarıyla olustu</p>".$username."<br>";
			  echo "<p>Login Ekranına yönlendiriliyorsunuz</p>";
			  header("refresh:4; url=kayit.php");
		  }else{
			  echo "<h3>Hata</h3>";
			  echo "<p>Kayıt yapılamadı</p>";
			  header("refresh:2; url=kayit.php");
		  }
		  
	  }
 }
 ?>
</body>
</html>
