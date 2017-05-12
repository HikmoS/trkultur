<?php
require_once("ayar.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Kayıt</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>




<body>

<?php
if(strip_tags(@$_GET['kod'])=="biz@bir@aileyiz5569" )
{kayit();}

else
giris();


function giris(){

?>
<div class="container">
<h1 style="text-align:center;">HEK YAPAN HAK YER</h1>
<br>
<h4 style="text-align:center;">Admin Panel Giris </h4>
<br>
<div class="col-md-5">

<form action="giris.php" method="post">


<table class="table">
<tr>
<td>Kullanici Adi</td>
<td><input type="text" name="KullaniciAdi" class="form-control"></td>
</tr>

<tr>
<td>Kullanici Sifre</td>
<td><input type="password" name="KullaniciSifre" class="form-control"></td></td>
</tr>

<tr>
<td></td>
<td><input class="btn btn-primary"  type="submit" value="Giris Yap"></td>
</tr>

</table>

</form>
</div>
</div>
<?php }  function kayit(){?>


<div class="container">
<h1 style="text-align:center;">HEK YAPAN HAK YER</h1>
<br>
<h4 style="text-align:center;">Admin Panel Kayıt</h4>
<br>
<div class="col-md-5">

<form action="islem.php" method="post">


<table class="table">


<tr>
<td>Ad</td>
<td><input type="text" name="Adi" class="form-control"></td>
</tr>


<tr>
<td>Soyad</td>
<td><input type="text" name="Soyadi" class="form-control"></td>
</tr>

<tr>
<td>E-mail</td>
<td><input type="text" name="E-mail" class="form-control"></td>
</tr>


<tr>
<td>Kullanici Adi</td>
<td><input type="text" name="KullaniciAdi" class="form-control"></td>
</tr>

<tr>
<td>Kullanici Sifre</td>
<td><input type="password" name="KullaniciSifre" class="form-control"></td></td>
</tr>



<tr>
<td></td>
<td><input class="btn btn-primary"  type="submit" value="Kayıt Ol"></td>
</tr>



</table>

</form>
</div>
</div>

<?php } ?>

</body>

</html>