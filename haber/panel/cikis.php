<?php
require_once("ayar.php");
?>

<?php

if(isset ($_SESSION['admin'])){
	session_destroy();
	echo "Cıkış Yapıldı.Login Ekranına Yönlendiriliyorsunuz.";
	header("location:kayit.php");
}

?>