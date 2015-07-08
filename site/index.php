<?php
session_start();
require('./controllers/functies.php');

$pdo = ConnectDB();

if(isset($_GET['paginanr']))
{
	$paginanr = $_GET['paginanr'];
}
else
{
	$paginanr = 1;
}

?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Transportplaza</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/Transportplaza.css" rel="stylesheet">
	<script src="./ckeditor/ckeditor.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="container">
		<div class="box-shadow">
			<div class="row">
				<div class="col-xs-12">
					<div class="LoginLink">
						<?php
							if(LoginCheck($pdo))
							{
						?>
						<li><a href="index.php?paginanr=52">Logout</a></li>	
						<?php
							}
							else
							{
						?>
						<li><a href="index.php?paginanr=51">Login</a></li>	
						<?php
							}
						?>
					</div>
					<div id="TPE_Logo" class="col-xs-12 col-sm-3">
						<div class="row">
							<a href="index.php?paginanr=1"><span class="sr-only">Back to home</span></a>
						</div>
					</div>
					<nav class="navbar navbar-default col-sm-3 TEMPCLASS">
						<!-- toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  <ul class="nav navbar-nav col-sm-12 col-md-10">
							<li class="active"><a href="index.php?paginanr=1">Home<span class="sr-only">(huidig scherm)</span></a></li>
							
							<li><a href="#">Gids</a></li>
							
							<li><a href="index.php?paginanr=3">Zoeken</a></li>
						  </ul>
						</div><!-- /.navbar-collapse -->
					</nav>
					<div class="col-xs-12 col-sm-6 TEMPCLASS">
						<form id="TitleOpnaam" method="post" action="index.php?paginanr=3">
							<div>
								<input class="col-xs-9" type="text" name="trefwoord" placeholder="zoek hier op bedrijfsnaam of specialisme">
								<input type="hidden" name="type"  value="">
								<input type="hidden" name="bereik"  value="">
								<input type="hidden" name="trefwoord"  value="">
								<input class="col-xs-3" type="submit" name="Zoek" value="zoeken"/>
							</div>
							<?php 
								//include 'controllers/ZoekVeld.php';
							?>
						</form>
					</div>
				</div>
			</div>
			<?php
			
			
			
			if(LoginCheck($pdo))
			{
			?>
			<div class="row">
				<div class="col-xs-12">
					<div class="navbar navbar-default collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav pull-left">
							<li role="presentation"><a href="index.php?paginanr=5">Bedrijf toevoegen</a></li>
							<li role="presentation"><a href="index.php?paginanr=4">Bedrijf wijzigen</a></li>
						</ul>
						<ul class="nav navbar-nav pull-right">
							<li role="presentation"><a href="index.php?paginanr=7">Beheer</a></li>
							<li role="presentation"><a href="index.php?paginanr=8">Beheer Advertenties</a></li>
						</ul>
						</nav>
					</div>
				</div>
			</div>
			<?php
			}

			if(isset($_GET['paginanr']))
				{
					if($_GET['paginanr'] <= 3)
					{
					?>
					<div class="row">
						<div class="col-xs-12">
							<img src="images/Reclame-1.jpg"/>
						</div>
					</div>
					<?php
					}
				}
				else
				{
					?>
					<div class="row">
						<div class="col-xs-12">
							<img src="images/Reclame-1.jpg"/>
						</div>
					</div>
					<?php
				}
			switch($paginanr)
				{
					case 1:
					require('./controllers/home.php');
					break;
					case 2:
					require('./controllers/gids.php');
					break;
					case 3:
					require('./controllers/zoeken.php');
					break;
					case 4:
					require('./controllers/wijzigen.php');
					break;
					case 5:
					require('./controllers/toevoegenbedrijf.php');
					break;
					case 6:
					require('./controllers/bedrijven.php');
					break;
					case 7:
					require('./controllers/beheer.php');
					break;
					case 51:
					require('./controllers/inloggen.php');
					break;
					case 52:
					require('./controllers/uitloggen.php');
					break;
				}
			?>
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>