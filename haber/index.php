<?php
require_once("uncludes/config.php");
?>


<!DOCTYPE html>

<html>
<head>
<title>Anasayfa</title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="css/style.css" rel="stylesheet" media="all"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>


</head>
<body style="background-color:#d5d5d5">
    
        
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
          <li><a href="#">Müzik</a></li>
		  
          
        </ul>
		
      </li>
	  <li><a href="#">Hakkında</a></li>
      <li><a href="#">İletişim</a></li>
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
	
	
     
	
	
	
		
  
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/dc867654-debd-410b-8ee8-a8770c4bd48b.jpg" Width="1400" />
                <div class="carousel-caption">
                    <h3>
                        Headline</h3>
                    <p>
                       Lorem ipsum Lorem ipsum Lorem ipsum</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="images/dc867654-debd-410b-8ee8-a8770c4bd48b.jpg" Width="1400" />
                <div class="carousel-caption">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum Lorem ipsum Lorem ipsum</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="images/dc867654-debd-410b-8ee8-a8770c4bd48b.jpg" Width="1400" />
                <div class="carousel-caption">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum Lorem ipsum Lorem ipsum</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="images/dc867654-debd-410b-8ee8-a8770c4bd48b.jpg" Width="1400" />
                <div class="carousel-caption">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum  Lorem ipsum Lorem ipsum</p>
                </div>
            </div>
            <!-- End Item -->

            <div class="item">
                <img src="images/dc867654-debd-410b-8ee8-a8770c4bd48b.jpg" Width="1400" />
                <div class="carousel-caption">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum Lorem ipsum Lorem ipsum</p>
                </div>
            </div>

        </div>
        <!-- End Carousel Inner -->
        <ul class="nav nav-pills nav-justified">
            <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">About<small>Lorem
                ipsum dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="1"><a href="#">Oyun<small>Lorem ipsum
                dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="2"><a href="#">Kültür ve Sanat<small>Lorem ipsum
                dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="3"><a href="#">Dizi<small>Lorem ipsum
                dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="4"><a href="#">Sinema<small>Lorem ipsum
                dolor sit</small></a></li>
        </ul>
    </div>
    <!-- End Carousel -->

	
	

    
		<div class="icerik golge-efekti yuksek">
			
			
			
			<?php
				
				$veri = $db -> query("SELECT * FROM haber H, haber_icerik HI WHERE H.IDHaber = HI.HaberID",PDO::FETCH_ASSOC);
				if($veri->rowCount()){
					foreach($veri as $row){
						?>
						<hr style="height: 10px; border: 0; box-shadow: 0 10px 10px -10px #8c8b8b inset;">
						<h3 style="padding-bottom:20px;"><?php print $row["HaberBaslik"];?></h3>						
						<a href="haber.php"><img src="<?php echo $row["Foto1"];?>" alt="Resim" style=" width:660px; height:300px;" id="resim" /></a>
						<h5 style="padding-top:20px; padding-left:20px; text-align:justify;"><?php  print $row["HaberTarih"];?></h5>		
						
						<?php
					}
				}				 
				?>
      
	</div>
        
        
	
	

	
	<div class="sag">
 
  
      <div class="golge-efekti yuksek">
      
	  <h3>En çok okunan</h3>
        <br>
			<div class="baslik">
			</div>
			<div class="img">
			</div>
			<div clasS="haber">
			</div>
			<div class="tarih">
			</div>   
	</div>
</div>



<!--<footer >

<div class="golge-efekti yuksek">
<p>Lorem ipsum dolor sit</p>
</div>

</footer> -->





	<script>
     jQuery(document).ready(function ($) {

         $('#myCarousel').carousel({
             interval: 5000
         });

         $('#carousel-text').html($('#slide-content-0').html());

         //Handles the carousel thumbnails
         $('[id^=carousel-selector-]').click(function () {
             var id = this.id.substr(this.id.lastIndexOf("-") + 1);
             var id = parseInt(id);
             $('#myCarousel').carousel(id);
         });


         // When the carousel slides, auto update the text
         $('#myCarousel').on('slid.bs.carousel', function (e) {
             var id = $('.item.active').data('slide-number');
             $('#carousel-text').html($('#slide-content-' + id).html());
         });
     });

        </script>

    
</body>
</html>