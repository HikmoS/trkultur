<?php
require_once("uncludes/config.php");
?>

<!DOCTYPE html>

<html>
<head>
<title>Haber</title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="css/still.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"/>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"/>


</head>


<body style="background-color:#d5d5d5;">

<nav class="navbar navbar-inverse" role="navigation"  >
  
  <div class="navbar-header"  >
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">SİTE ADI</a>
  </div>

 
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Anasayfa</a></li>
      <li><a href="teknoloji.php">Teknoloji</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kültür ve Sanat <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="kitap.php">Kitap</a></li>
          <li><a href="dizi.php">Dizi</a></li>
          <li><a href="sinema.php">Sinema</a></li>
          <li class="divider"></li>
          <li><a href="müzik.php">Müzik</a></li>
		  
          
        </ul>
		
      </li>
	  <li><a href="#">Hakkında</a></li>
      <li><a href="spor.php">Spor</a></li>
     <li><a href="oyun.php">Oyun</a></li>
    </ul>
    <div class="nav navbar-nav navbar-right">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q"/>
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>
    
  </div><!-- /.navbar-collapse -->
</nav>



    
    
                    
                        <div class="okunan golge-efekti yuksek">
                            
                         <?php  
							$al = strip_tags($_GET["id"]);
							$db -> query("update haber set OSayisi=OSayisi+1 where IDHaber =".$al."",PDO::FETCH_ASSOC);
							$veri2 = $db -> prepare("SELECT * FROM haber H INNER JOIN haber_icerik HI ON H.IDHaber = HI.HaberID  WHERE  HI.HaberID=?");
              $veri2->execute(array(($al)));
              $veri = $veri2->fetchAll(PDO::FETCH_ASSOC);


							if($veri){
								foreach($veri as $row){
                  $id = $row ["IDHaber"];
                  $_GET["sil"] = $id;
                  if($_GET["sil"]){
                    $bakma =$db-> prepare("SELECT sil FROM haber WHERE IDHaber=?");
                    $bakma -> execute(array($_GET["sil"]));
                    $bakma2 = $bakma -> fetch();

                    if($bakma2["sil"]=="1"){  
                  ?>	
						<h3 style="padding-bottom:30px;"><?php print $row["HaberBaslik"];?></h3>							
						<img src="<?php echo $row["Foto1"];?>" alt="Resim" style=" width:860px; height:400px;" id="resim" />
						<h4 style="padding-top:20px; text-align:justify; line-height:1.5; font-size:20px;"><?php  print $row["Icerik"];?></h4>
						
						<?php
					}
				}
				}
				 }
			?>
					 
					 
					 </div>

   
</body>
</html>
