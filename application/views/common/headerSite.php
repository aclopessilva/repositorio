<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title><?php echo $this->lang->line('system_system_name'); ?></title>

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>"
	rel="stylesheet">

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link
	href="<?php echo base_url('bootstrap/assets/css/ie10-viewport-bug-workaround.css'); ?>"
	rel="stylesheet">

<!-- Custom styles for this template -->

<!-- Bootstrap theme -->
<link
	href="<?php echo base_url ( 'bootstrap/css/bootstrap-theme.min.css' );?>"
	rel="stylesheet">


<!-- Custom styles for app specific stuff -->
<link
	href="<?php echo base_url ( 'bootstrap/assets/css/tablesorter/blue/style.css' );?>"
	rel="stylesheet">


<script
	src="<?php echo base_url('bootstrap/assets/js/jquery/jquery.js');?>"></script>
<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"></script>

</head>

<body>
	<!-- Fixed navbar -->
	<div class="container">
		<nav class="navbar navbar-inverse">

			<div class="container-fluid">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed"
						data-toggle="collapse" data-target="#navbar" aria-expanded="false"
						aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo site_url('site')?>">ACLS</a>

				</div>


				<ul class="nav navbar-nav">
					<li><a href="<?php echo site_url("site/sobre")?>">Sobre</a></li>
					<li><a href="<?php echo site_url("site/carreira")?>">Carreira</a></li>
					<li><a href="<?php echo site_url("site/trabalho")?>">Trabalhos</a></li>
					<li><a href="<?php echo site_url("site/contato")?>">Contato</a></li>

				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo site_url('login')?>"><span
							class="glyphicon glyphicon-log-in"></span> Area Administrativa</a></li>
				</ul>
			</div>

		</nav>
		<div style="background-color: gray; height: 10px"></div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div style="border: 2px solid black; margin: 40px 0px;">