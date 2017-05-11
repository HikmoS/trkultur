<?php
require_once("ayar.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Yonetim Paneli</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>


<body>

<?php 
require_once("ayar.php");
if($_SESSION["admin"])
{

$bakma=$db-> prepare("SELECT admin FROM yazar WHERE KullaniciAdi=?");
$bakma->execute(array($_SESSION['admin']));
$bakma2 =$bakma->fetch(PDO::FETCH_ASSOC);

if($bakma2["admin"]=="1"){ ?>

<div class="container">

<div class="col-md-6">

<form action="" method="post">


<table class="table">
<br>
<h3>Yönetim Paneli İşlemleri</h3>
<br>

<tr>
<td>Baslik</td>
<td><input type="text" name="Baslik" class="form-control"></td>
</tr>


<tr>
<td>Tarih</td>
<td><input type="date" name="Tarih" class="form-control"></td>
</tr>

<tr>
<td>Kategori</td>
<td><input type="text" name="Kategori" class="form-control"></td>
</tr>

<tr>
<td>Yazar</td>
<td><input type="text" name="Adi" class="form-control"></td>
</tr>


<tr>
<td>İcerik</td>
<td><textarea name="Icerik" class="form-control"></textarea></td>
</tr>

<tr>
<td>Resim</td>
<td><input type="text" name="Foto1" class="form-control"></td></td>
</tr>



<tr>
<td></td>
<td><input class="btn btn-primary"  type="submit" value="Ekle"></td>
</tr>



</table>

</form>



<?php

if($_POST) {  //sayfamızda post olup olmadıgına bakar
error_reporting(E_ALL ^ E_NOTICE);
 // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz

 $baslik = strip_tags($_POST['Baslik']); // strip_tags yapılcak
 $tarih = strip_tags($_POST['Tarih']);// strip_tags yapılcak
 $kategori = strip_tags($_POST['Kategori']);// strip_tags yapılcak
 $yazar = strip_tags($_POST['Adi']);// strip_tags yapılcak
 $icerik = strip_tags($_POST['Icerik']);// strip_tags yapılcak
 $foto = strip_tags($_POST['Foto1']);// strip_tags yapılcak
 
 $veri = $db -> prepare("SELECT * FROM kategori WHERE Kategori =?");
 $veri ->execute(array($kategori)); //sql injection yapılcak
 $veri2 = $veri -> fetch();
 $kategori2 = $veri2['KatID'];
 
  $veri = $db -> prepare("SELECT * FROM yazar WHERE Adi =?");
  $veri -> execute(array($yazar));//sql injection yapılcak
 $veri2 = $veri -> fetch();
 $yazar2 = $veri2['YazarID'];
 
 if($baslik <>"" && $icerik <>""&& $tarih <>""&& $kategori <>""&& $yazar <>""){
 	$veri=$db -> prepare("INSERT INTO haber (YazarID,KategoriID,HaberBaslik,HaberTarih) VALUES (?,?,?,?)");
	$veri ->execute(array(($yazar2),($kategori2),($baslik),($tarih)));
	$veri2 = $veri->fetch();

	if($veri2) { //sql injection yapılcak
		
		header("location:yonetim.php");
	}
	 else
	 {
		 echo "Hata olustu";
	 }
	 
 }
 
 $veri = $db -> query("SELECT * FROM haber ORDER BY IDHaber DESC");
 $veri = $veri -> fetch(PDO::FETCH_ASSOC);
 $id2 = $veri ['IDHaber'];
 
 if($baslik <>"" && $icerik <>""&& $tarih <>""&& $kategori <>""&& $yazar <>""){
 $veri2 = $db -> prepare("INSERT INTO haber_icerik (HaberID,Icerik,Foto1) VALUES (?,?,?)");
 $veri2 -> execute(array(($id2),($icerik),($foto)));
 $veri3 = $veri2->fetch();
  if( $veri2){ //sql injection yapılcak
		header("location:yonetim.php");
		}
	 else
	 {
		 echo "Hata olustu";
	 }
	 
}
}
?>
</div> <!-- col md 6 bitis -->

<div class="col-md-6">
<br>
<a href="cikis.php"><h3 style="text-align:center;">Cikis</h3></a>
</div>
<!-- ############################################################## -->



<div class="col-md-12">

<table class="table">

<tr>
<th>Baslik</th>
<th>Tarih</th>
<th>Icerik</th>
<th>Foto</th>
</tr>


<?php
$sorgu =$db -> query("SELECT * FROM haber H, haber_icerik HI WHERE H.IDHaber = HI.HaberID ORDER BY IDHaber DESC",PDO::FETCH_ASSOC);// Makale tablosundaki tüm verileri çekiyoruz
if($sorgu -> rowCount()){
foreach($sorgu as $row){
$id = $row["HaberID"];
$_SESSION["sil"] = $id;
if($_SESSION["sil"])
{
$bakma=$db-> prepare("SELECT sil FROM haber_icerik WHERE HaberID=?");
$bakma->execute(array($_SESSION['sil']));
$bakma2 =$bakma->fetch(PDO::FETCH_ASSOC);	
if($bakma2["sil"]=="1"){
?>

<tr>
    <td><?php echo $row["HaberBaslik"]; ?></td>
	<td><?php echo $row["HaberTarih"]; ?></td>
    <td style="width:800px;"><?php echo $row["Icerik"]; ?></td>
	<td><?php echo $row["Foto1"]; ?></td>
    <td><a href='duzenle.php?id=<?=$row["IDHaber"]?>' class="btn btn-primary">Düzenle</a></td>
    <td><a href='sil.php?id=<?=$row["IDHaber"]?>' class="btn btn-danger">Sil</a></td>  
</tr>

<?php

	}
	
}
}
}
?>


</table>
</div> <!-- col-md-7 bitis -->
</div><!-- caontainer bitis -->
 <?php }}
 else
 {	header("location:../index.php"); }?>
</body>

</html>