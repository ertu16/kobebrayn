

<?php
 include("baglan.php");

   $sorgu=$vt->prepare('SELECT *FROM yorumlar WHERE onay="1"');
   $sorgu->execute();
   $yorumlist=$sorgu-> fetchAll(PDO::FETCH_OBJ);

  ?>

<!DOCTYPE html>
<!--
	Solitude by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->


<html lang="EN">
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Black Mamba</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/elusive-webfont.css">
    <link href="css/animate.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>

    <script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>


  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">


  	<div id="navbar-main">
      <!-- Fixed navbar -->
	    <div class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	          	<i class="el-icon-lines"></i>
	          </button>
	          <a class="navbar-brand hidden-xs hidden-sm" href="#home"><h1>Kobe Braynt </h1></a>
	        </div>
	        <div class="navbar-collapse collapse">
	          	<ul class="nav navbar-nav">
		            <li><a href="#home" class="smoothScroll">Anasayfa</a></li>
					<li> <a href="#about" class="smoothScroll">Hakk??nda </a></li>

					<li> <a href="#team" class="smoothScroll">Aile ve Arkada??lar??</a></li>
					<li> <a href="#portfolio" class="smoothScroll">Foto??raflar</a></li>
					<li> <a href="login/index.php" class="smoothScroll">Giri??</a></li>

				</ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
    </div>



		<!-- ==== HEADERWRAP ==== -->
	    <div id="headerwrap" id="home" name="home">
			<header class="clearfix">
	  		 		<h1 class="animated bounceIn">Black Mamba</h1>
	  		 		<p class="animated slideInLeft">Basketbol Efsanevisi </p>
	  		 		<p class="animated slideInRight">Kobe Braynt</p>

	  		</header>
	    </div><!-- /headerwrap -->

		<!--  SERVICES -->
		<div class="greywrap">
			<div class="container" id="about" name="about">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-6 callout">
						<div class="col-md-3 service-icon-wrapper img-circle">
							<i class="icon el-icon-time"></i>
						</div>
						<div class="col-md-9 fade-up service-info">
							<h2>Buzzer Beater</h2>
							<p> Son saniye , ma???? kazand??racak ??ut'u kime att??r??rd??n??z sorusunun cevab?? Kobe BRAYNT.
								Ka?? ma?? kazand??rm????t??r sizce ? 5 ma?? m??d??r ? yoksa 10 ma?? m??d??r ? hay??r 24 ma?? kazand??ran son saniye ??ut'unu atan oyuncudur Kobe BRAYNT.
							</p>
							<a href="https://www.youtube.com/watch?v=fUxjunYNB60" class="btn homebtn smoothScroll"> Watch! <i class="el-icon-chevron-down homeicon"></i></a>
						</div>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6 callout">
						<div class="col-md-3 service-icon-wrapper img-circle">
							<i class="icon el-icon-star"></i>
						</div>
						<div class="col-md-9 fade-up service-info">
							<h2>MVP KOBE BRAYNT</h2>
							<p>Kobe Bryant 2002, 2007, 2009, 2011 y??llar?? NBA All Star organizasyonunda d??rt defa en de??erli oyuncu se??ildi.
							 </p>
							<a href="https://www.youtube.com/watch?v=A15wzmaiIq8" class="btn homebtn smoothScroll"> Watch! <i class="el-icon-chevron-down homeicon"></i></a>
						</div>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6 callout">
						<div class="col-md-3 service-icon-wrapper img-circle">
							<i class="icon el-icon-user"></i>
						</div>
						<div class="col-md-9 fade-up service-info">
							<div class="fade-up">
								<h2>KOBE K??MD??R ? </h2>
								<p>Kobe kimidir? sorusuna cevap olarak kobe branyt'??n nba y??ld??z?? Shaq ile yapt??????  harika r??partaj. </p>
								<a href="https://www.youtube.com/watch?v=R5t1kXjLYfQ" class="btn homebtn smoothScroll"> Watch! <i class="el-icon-chevron-down homeicon"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- ==== ABOUT ==== -->
		<div class="container" id="about" name="about">
			<div class="row white">
				<h1 class="fade-down centered"> KOBE BRAYNT'IN HAYATI ?  </h1>
				<hr>

				<div class="fade-up col-md-6">

					<p>  Kobe  Bean Bryant, 23 A??ustos 1978'de ABD'nin Pensilvanya eyaletinin Philadelphia kentinde do??du. NBA ve Avrupa'da basketbol oynayan baba Joe Bryant, tek o??luna, ??ok sevdi??i Japonya'n??n Kobe kentinin me??hur bifte??inin ad??n?? verdi.

Basketbolla 3 ya????nda tan????an Kobe, babas??n??n Sebastiani Rieti tak??m??na transferi sonras?? 6 ya????nda ailesiyle ??talya'ya ta????nd??. Burada ??talyanca ve ??spanyolca ????renen, yazlar?? ise basketbol oynamak i??in ABD'ye giden Bryant, babas??n??n basketbolu b??rakmas??yla 1991'de ??lkesine d??nd??.

Philadelphia'daki Lower Merion Lisesi'nde g??sterdi??i performansla dikkatleri ??zerine ??eken Bryant, ??niversiteye gitmeden do??rudan NBA se??melerine kat??lma karar?? ald??????nda 17 ya????ndayd??.

1996 draft??nda Charlotte Hornets taraf??ndan 13. s??rada se??ilen Kobe'nin haklar??, S??rp pivot Vlade Divac kar????l??????nda ??ocuklu??undan beri oynama hayalini kurdu??u Los Angeles Lakers taraf??ndan al??nd??.

Bryant, 18 ya????ndayken Lakers formas??n?? giyerek rekoru, Jermaine O'Neal ve Andrew Bynum taraf??ndan k??r??l??ncaya kadar "NBA'de oynayan en gen?? basketbolcu" unvan??n?? elde etti.

Rakip savunmalara kar???? ac??mas??zl?????? nedeniyle zehirli bir y??lan t??r?? "Kara Mamba" lakab?? tak??lan Kobe, 14 Aral??k 2014'teki Minnesota Timberwolves ma????nda, kariyerinde 32 bin 292 say??s?? bulunan Michael Jordan'?? ge??erek Kerim Abd??lcabbar (38 bin 387) ve Karl Malone'un (36 bin 928) ard??ndan "NBA tarininin en skorer 3'??nc?? oyuncusu" oldu.

Los Angeles Lakers ile 5 NBA ??ampiyonlu??u kazanan, 18 kez all-star se??ilen, 2008'de normal sezonun, 2009 ve 2010'da ise final serisinin en de??erli oyuncusu (MVP) ??d??l??n?? alan, ABD Milli Tak??m?? formas??yla 2008 ve 2012 Olimpiyatlar??'nda alt??n madalya kazanan Kobe Bryant, kariyerinde 1566 ma??a ????kt??. </p>
				</div><!-- col-md-6 -->

				<div class="fade-up col-md-6">

					 	<p> <h5 class=""> REKORLARI </h5>

- Kerim Abd??lcabbar ve Karl Malone'un ard??ndan NBA tarininin en skorer 3'??nc?? oyuncusu... (33 bin 583)
<br>
- NBA tarihinde hem 30 bin say?? hem de 6 bin asist baraj??n?? ge??en tek oyuncu
<br>
- Bir NBA tak??m??n??n formas??n?? en uzun s??re giyen basketbolcu: 20 sezon (Los Angeles Lakers)
<br>
- Bir ma??ta 2'nci en fazla say?? atan NBA oyuncusu: 81 say??
<br>
- Kariyeri boyunca 40 say??n??n ??st??nde skor ??retti??i ma?? say??s??: 134 (60 say?? ve ??st?? 5, 50 say?? ve ??st?? 25 ma??)
<br>
- Wilt Chamberlain'den sonra 50 say?? baraj??n?? ??st ??ste en fazla ge??en NBA oyuncusu: 4 ma?? (2007'nin mart ay??nda s??ras??yla 65, 50, 60 ve 50 say??)
<br>
- NBA say?? kral??: 2005-06 sezonu (35,4) ve 2006-07 sezonu (31,6)
<br>
- NBA All-Star ma????nda MVP ??d??l??'n?? en fazla alan oyuncu: 4 kez (2002, 2007, 2009, 2011)
<br>
- NBA All-Star ma????na ??st ??ste en fazla se??ilen oyuncu: 18 kez
<br>
- NBA All-Star ma???? ilk 5'ine en fazla se??ilen oyuncu: 16 kez
<br>
- Bir ma??ta en fazla 3 say??l??k basket atan oyuncu: 12
<br>
- Bir NBA ma????na ilk 5'te ba??layan en gen?? oyuncu: 18 ya??, 158 g??n
<br>
- NBA All-Star ma????na ilk 5'te ????kan en gen?? oyuncu: 19 ya??, 169 g??n</p>
<br>				</div><!-- col-md-6 -->
			</div><!-- row -->
		</div><!-- container -->


		<!-- ==== SECTION DIVIDER2 -->
		<section class="section-divider textdivider divider2">
			<div class="container">
				<h1 class="fade-down">KAR??YER??</h1>
				<hr>
				<div class="col-md-3">
					<span class="counter">1566</span>
					<span class="counter-desc"> B??t??n Ma??lar?? </span>
				</div>
				<div class="col-md-3">
					<span class="counter">33643</span>
					<span class="counter-desc">B??t??n Say??lar?? </span>
				</div>
				<div class="col-md-3">
					<span class="counter">7047</span>
					<span class="counter-desc">B??t??n Ribaundlar??</span>
				</div>
				<div class="col-md-3">
					<span class="counter">6306</span>
					<span class="counter-desc">B??t??n Asistleri </span>
				</div>
			</div><!-- container -->
		</section><!-- section -->




		<!-- ==== TEAM MEMBERS ==== -->
		<div class="container section" id="team" name="team">
		<br>
		<div class="row white centered">
				<h1 class="fade-down centered"> A??LES?? </h1>
				<hr class="fade-down title-mb">
				<div class="col-md-4 ">
					<div class="col-md-3 col-sm-3 col-xs-3 fade-down team-image-wrapper">
						<img class="img team-image" src="images/natalia.jpg" alt="">


					</div>
					<div class="col-md-9 col-sm-9 col-xs-9 fade-up team-info">
						<h4> Natallia Diamante Bryant </h4>
						<p> Natalia Diamante Bryant (19 Ocak 2003 do??umlu) Los Angeles, California merkezli bir Amerikan Voleybol Oyuncusu. Kobe Bryant'??n (NBA Star Player) b??y??k k??z??yd??. </p>

					</div>
				</div>

				<div class="col-md-4">
					<div class="col-md-3 col-sm-3 col-xs-3 fade-down team-image-wrapper">
						<img class="img team-image" src="images/vanessa.jpg" alt="">


					</div>
					<div class="col-md-9 col-sm-9 col-xs-9 fade-up team-info">
						<h4>Vanessa Bryant</h4>
						<p>Vanessa Laine Bryant, 5 May??s 1982 tarihinde Los Angeles'da d??nyaya geldi. ??nstagram ??zerinde 1.9 milyon takip??isi bulunan Vanessa Bryant ile tan????t??????nda 17 ya????ndayd??. Tan????t??ktan 6 ay sonra Kobe Bryant'??n evlilik teklif etti??i Vanessa Bryant, 4 k??z ??ocu??u sahibidir.</p>

					</div>
				</div>

				<div class="col-md-4">
					<div class="col-md-3 col-sm-3 col-xs-3 fade-down team-image-wrapper">
						<img class="img team-image" src="images/gianna.jpg" alt="">


					</div>
					<div class="col-md-9 col-sm-9 col-xs-9 fade-up team-info">
						<h4>Gianna Maria-Onore</h4>
						<p> Kobe Bryant - Vanessa Laine ??iftinin ikinci k??z ??ocuklar?? olan Gianna Maria-Onore, 1 May??s 2006 tarihinde d??nyaya gelmi??ti. Babas??n??n izinden giden Gianna Maria-Onore, basketbolcu olmak istiyordu. Gen?? ya????na ra??men yetene??i ile dikkat ??eken Gianna, basketbolda gelece??in y??ld??zlar?? aras??nda g??steriliyordu</p>

					</div>

				</div>


			</div><!-- row -->
			<div class="row white centered">
				<h1 class="fade-down centered">Yak??n Arkada??lar?? </h1>
				<hr class="fade-down title-mb">
				<div class="col-md-4 ">
					<div class="col-md-3 col-sm-3 col-xs-3 fade-down team-image-wrapper">
						<img class="img team-image" src="images/james.jpg" alt="">
						<a href="https://twitter.com/KingJames" class="team-social twitter"><i class="el-icon-twitter"></i></a>
						<a href="https://www.instagram.com/kingjames/" class="team-social instagram"><i class="el-icon-instagram"></i></a>

					</div>
					<div class="col-md-9 col-sm-9 col-xs-9 fade-up team-info">
						<h4> Lebron JAMES</h4>
						<p> Kobe Braynt'??n ezeli rakibi ve can dostu gibi g??rd?????? lebron James'in bir ka?? istatisti??i </p>
						<p><a href="https://www.basketball-reference.com/players/j/jamesle01.html" class="btn btn-success">Read more!</a></p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="col-md-3 col-sm-3 col-xs-3 fade-down team-image-wrapper">
						<img class="img team-image" src="images/jordan.jpg" alt="">
						<a href="https://twitter.com/jumpman23" class="team-social twitter"><i class="el-icon-twitter"></i></a>
						<a href="https://www.instagram.com/jumpman23/" class="team-social instagram"><i class="el-icon-instagram"></i></a>

					</div>
					<div class="col-md-9 col-sm-9 col-xs-9 fade-up team-info">
						<h4>Micheal JORDAN</h4>
						<p>Kobe Braynt'??n abisi olarak g??rd?????? basketbol'un efsanevisi Micheal Jordan'??n bir ka?? istatisti??i </p>
						<p><a href="https://www.basketball-reference.com/players/j/jordami01.html" class="btn btn-success">Read more!</a></p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="col-md-3 col-sm-3 col-xs-3 fade-down team-image-wrapper">
						<img class="img team-image" src="images/shaq.jpg" alt="">
						<a href="https://twitter.com/SHAQ" class="team-social twitter"><i class="el-icon-twitter"></i></a>
						<a href="https://www.instagram.com/shaq/" class="team-social instagram"><i class="el-icon-instagram"></i></a>

					</div>
					<div class="col-md-9 col-sm-9 col-xs-9 fade-up team-info">
						<h4>Shaquille O'Neal</h4>
						<p> Kobe Braynt'??n efsanevi basketbolcu olmas??n??n ard??nda Shaq ile arkada??l?????? ve dostlu??u en ??nemli oyunculardan olan Shaquille O'neal'in bir ka?? istatisti??i </p>
						<p><a href="https://www.basketball-reference.com/players/o/onealsh01.html" class="btn btn-success">Read more!</a></p>
					</div>

				</div>


			</div><!-- row -->

		</div><!-- container -->

		<!-- ==== GREYWRAP ==== -->
		<div class="greywrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 centered fade-up">
						<img class="img-responsive" src="images/dear.jpg" align="">
					</div>
					<div class="col-md-6 fade-down">
						<h2>Dear Basketball </h2>
						<p>Dear Basketball,

From the moment
I started rolling my dad???s tube socks
And shooting imaginary
Game-winning shots
In the Great Western Forum
I knew one thing was real:
I fell in love with you.
A love so deep I gave you my all ???
From my mind & body
To my spirit & soul.
As a six-year-old boy
Deeply in love with you
I never saw the end of the tunnel.
I only saw myself
Running out of one.
And so I ran.
I ran up and down every court
After every loose ball for you.
You asked for my hustle
I gave you my heart
Because it came with so much more.
I played through the sweat and hurt
Not because challenge called me
But because YOU called me.
I did everything for YOU
Because that???s what you do
When someone makes you feel as
Alive as you???ve made me feel.
You gave a six-year-old boy his Laker dream
And I???ll always love you for it.
But I can???t love you obsessively for much longer.
This season is all I have left to give.
My heart can take the pounding
My mind can handle the grind
But my body knows it???s time to say goodbye.
And that???s OK.
I???m ready to let you go.
I want you to know now
So we both can savor every moment we have left together.
The good and the bad.
We have given each other
All that we have.
And we both know, no matter what I do next
I???ll always be that kid
With the rolled up socks
Garbage can in the corner
:05 seconds on the clock
Ball in my hands.
5 ??? 4 ??? 3 ??? 2 ??? 1

Love you always,
Kobe
 </p>
						<p><a href="https://www.youtube.com/watch?v=HeaU3Pg6CGw&t=127s" class="btn btn-success">Watch!</a></p>
					</div>
				</div><!-- row -->
			</div>
			<br>
			<br>
		</div><!-- greywrap -->

		<!-- ==== SECTION DIVIDER3 -->
		<section class="section-divider textdivider divider3">
			<div class="container">
				<h1 class="fade-down">KOBE BRAYNT </h1>
				<hr>
				<p class="fade-up">Bu hayatta bir ??eyde ba??ar??l?? olmak istiyorsan, yapmak gereken tek bir ??ey var; di??er her ??eyden fedakarl??k yapman. Aile vaktin, arkada??lar??nla ge??irece??in zamanlar, iyi bir evlat olmak gibi ??eylerden fedakarl??k yapman gerekir.</p>
				<p>
			</div><!-- container -->
		</section><!-- section -->

		<!-- ==== PORTFOLIO ==== -->
		<div id="portfolio" name="portfolio">
		<br>
			<div class="row white">
				<h1 class="fade-down centered">FOTO??RAFLAR</h1>
				<hr class="fade-down title-mb">
			</div><!-- /row -->
			<div class="">
			<div class="">

				<div id="portfolio-carousel">
					<!-- PORTFOLIO IMAGE 1 -->
					<div class="fade-up col-md-4 ">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="images/foto1.jpg" alt="">
								<figcaption>
									<h5>FOTO??RAF 1</h5>

									<a href="images/foto1.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
				    	</div><!-- /grid-mask -->
					</div><!-- /col -->

					<!-- PORTFOLIO IMAGE 2 -->
					<div class="fade-up col-md-4">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="images/foto2.jpg" alt="">
								<figcaption>
									<h5>FOTO??RAF 2</h5>

									<a href="images/foto2.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
				    	</div><!-- /grid-mask -->
					</div><!-- /col -->

					<!-- PORTFOLIO IMAGE 3 -->
					<div class="fade-up col-md-4">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="images/foto3.jpg" alt="">
								<figcaption>
									<h5>FOTO??RAF 3</h5>

									<a href="images/foto3.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
				    	</div><!-- /grid-mask -->
					</div><!-- /col -->

					<!-- PORTFOLIO IMAGE 4 -->
					<div class="fade-up col-md-4 ">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="images/foto4.jpg" alt="">
								<figcaption>
									<h5>FOTO??RAF 4</h5>

									<a href="images/foto4.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
				    	</div><!-- /grid-mask -->
					</div><!-- /col -->

					<!-- PORTFOLIO IMAGE 5 -->
					<div class="fade-up col-md-4">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="images/foto5.jpg" alt="">
								<figcaption>
									<h5>FOTO??RAF 5</h5>

									<a href="images/foto5.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
				    	</div><!-- /grid-mask -->
					</div><!-- /col -->



					<!-- PORTFOLIO IMAGE 2 -->
					<div class="fade-up col-md-4">
				    	<div class="grid mask">
							<figure>
								<img class="img-responsive" src="images/foto8.jpg" alt="">
								<figcaption>
									<h5>FOTO??RAF 6</h5>

									<a href="images/foto8.jpg" class="btn btn-primary btn-lg launch-lb"><i class="el-icon-zoom-in"></i></a>
								</figcaption><!-- /figcaption -->
							</figure><!-- /figure -->
				    	</div><!-- /grid-mask -->
					</div><!-- /col -->






			</div><!-- /carousel -->
			</div><!-- /row -->

		</div><!-- /row -->
	</div><!-- /container -->

		<!-- ==== SECTION DIVIDER4 ==== -->
		<section class="section-divider textdivider divider4">
			<div class="container">
				<h1 class="fade-down"> KAR??YER??'N??N  EN ??Y?? 10 HARAKET?? </h1>

				<a href="https://www.youtube.com/watch?v=T06yJR-Xzd4&t=1s">

<img class="" alt="" src="images/kobee.jpg" /></a>


			</div><!-- container -->

		</section><!-- section -->




		<!-- ==== SECTION DIVIDER6 ==== -->
		<section class="section-divider textdivider divider6">
			<div class="container">
				<h1 class="fade-down">Basketbol Efsanesini Aram??zdan Ayr??ld?????? Kara G??n </h1>
				<hr>

				<div class="fade-up">
					<p>26 OCAK 2020</p>
					<img class="" alt="" src="images/rip.jpg" /></a>
				</div>
			</div><!-- container -->
		</section><!-- section -->


		<div id="footerwrap">
			<div class="container">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
		<? php require('baglan.php');	?>
<div class="panel panel-default">
<div class="panel-heading"> Bu Siteye S??ylemek ??stedikleriniz</div>
  <div class="panel-body">
  	<form method="post">
  	  <div class="form-group">
	    <label for="exampleInputEmail1">Ad??n??z </label>
	    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Favori NBA Oyuncunuz </label>
	    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Favori NBA Oyuncunuz">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Yorumunuz </label>
	    <textarea name="subject" class="form-control" rows="3"></textarea> 
	    <a href="login/login.php" class="smoothScroll">G??nder</a>
	  </div>
	  





	</form>
  </div>
</div>



				<h4 class="fade-up"> What Can I say , Mamba Out!</h4>
			</div>
		</div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/init.js"></script>





  </body>

</html>
