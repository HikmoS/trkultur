
<?php
if($_GET){
require_once("ayar.php");



$al = strip_tags($_GET['id']);
$veri=$db -> prepare("UPDATE haber SET sil=0 WHERE IDHaber=?");
$veri->execute(array($al));
$veri2 = $veri->fetch();

if($veri){ // update yapılcak
	
	header("location:yonetim.php");
}
else {
	echo "HATA";
}




$veri =$db -> prepare("UPDATE haber_icerik SET sil=0 WHERE HaberID=?");
$veri->execute(array($al));
$veri2=$veri->fetch();

if($veri){ // update yapılcak
	
	header("location:yonetim.php");
}
else {
	echo "HATA2";
}


}
?>