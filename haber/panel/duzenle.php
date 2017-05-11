<?php
require_once("ayar.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>

<?php
$id = strip_tags($_GET["id"]);
$veri = $db ->prepare("SELECT * FROM haber H INNER JOIN haber_icerik HI ON H.IDHaber = HI.HaberID  WHERE  HI.HaberID=?");
$veri -> execute(array($id));
$veri = $veri -> fetch();


$veri2 = $db -> query("SELECT * FROM kategori  where KatID=".$veri['KategoriID']."");
$veri2 = $veri2 -> fetch(PDO::FETCH_ASSOC);

$veri3 = $db -> query("SELECT * FROM yazar WHERE YazarID=".$veri["YazarID"]."");
$veri3 = $veri3 -> fetch(PDO::FETCH_ASSOC);
?>

<div class="container">
<div class="col-md-6">
<form action="" method="post">
<table class="table">

<tr>
<td>Baslik<td>
<td><input type="text" name="HaberBaslik" class="form-control" value="<?php echo $veri['HaberBaslik'];?>"></td>
</tr>


<tr>
<td>Tarih</td>
<td><input type="date" name="HaberTarih" class="form-control" value="<?php echo $veri['HaberTarih'];?>"></td>
</tr>

<tr>
<td>Kategori</td>
<td><input type="text" name="Kategori" class="form-control" value="<?php echo $veri2['Kategori'];?>"></td>
</tr>

<tr>
<td>Yazar</td>
<td><input type="text" name="Adi" class="form-control" value="<?php echo $veri3['Adi'];?>"></td>
</tr>

<tr>
<td>İcerik</td>
<td><textarea name="Icerik" class="form-control" value="<?php echo $veri['Icerik'];?>"></textarea></td>
</tr>

<tr>
<td>Resim</td>
<td><input type="text" name="Foto1" class="form-control" value="<?php echo $veri['Foto1'];?>"></td></td>
</tr>

<tr>
<td></td>
<td><input class="btn btn-primary"  type="submit" value="Kaydet"></td>
</tr>


</table>
</form>
</div>
</div>

<?php

if($_POST) {  
error_reporting(E_ALL ^ E_NOTICE);//sayfamızda post olup olmadıgına bakar
 // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz

 $baslik = strip_tags($_POST['HaberBaslik']);
 $tarih = strip_tags($_POST['HaberTarih']); // strip_tags yapılcak
 $kategori = strip_tags($_POST['Kategori']); // strip_tags yapılcak
 $yazar = strip_tags($_POST['Adi']); // strip_tags yapılcak
 $icerik = strip_tags($_POST['Icerik']); // strip_tags yapılcaks
 $foto = strip_tags($_POST['Foto1']); // strip_tag yapılcak


 
 $veri = $db -> prepare("SELECT * FROM kategori WHERE Kategori =?"); // sql injection halletcez
 $veri ->execute(array($kategori));
 $veri2 = $veri->fetch();
 $kategoriid = $veri2['KatID'];


 $veri = $db -> prepare("SELECT * FROM yazar WHERE Adi =?");
 $veri -> execute(array($yazar));//sql injection yapılcak
 $veri2 = $veri -> fetch();
 $yazar2 = $veri2['YazarID'];


  
 if($baslik <>"" && $icerik <>""&& $tarih <>""&& $kategori <>""&& $yazar <>""){
 	$al = $_GET['id'];
 	$veri=$db -> prepare("UPDATE haber SET HaberBaslik=?, HaberTarih=?, KategoriID=?, YazarID=? WHERE IDHaber=?");
	$veri ->execute(array(($baslik),($tarih),($kategoriid),($yazar2),($al)));
	$veri2 = $veri->fetch();
	if($veri) {// sql injection halletcez
		
		header("location:yonetim.php");
	}

	 else
	 {
		 echo "HABER UPDATE HATASI";
		}
 
 }
 if($baslik <>"" && $icerik <>""&& $tarih <>""&& $kategori <>""&& $yazar <>""){
 	$al = $_GET['id'];
	$veri=$db -> prepare("UPDATE haber_icerik SET Icerik=?, Foto1=? WHERE HaberID=?");
	$veri -> execute(array(($icerik),($foto),($al)));
	$veri2 = $veri->fetch();
	if($veri) {  // sql injection halletcez
		header("location:yonetim.php");
	}
	 else
	 {
		 echo "HABER İCERİK UPDATE HATASI";
		}
 }
 
}
		?>






</body>



</html>