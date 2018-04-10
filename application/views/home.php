<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>DaniBlog</title>
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Dani Syahrul A</a>
						</div>
						
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="<?php echo site_url()?>/home">Home</a></li>
								<li><a href="<?php echo site_url()?>/about">About</a></li>
								<li><a href="<?php echo site_url()?>/contact">Contact</a></li>
								<li><a href="<?php echo site_url()?>/news">News</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Administrator</a></li>
										<li><a href="#">Member</a></li>
									</ul>
								</li>
							</ul>
							</div><!-- /.navbar-collapse -->
						</div>
					</nav>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<h1>Biodata</h1>
							<div class="table-responsive">
								<table class="table table-hover">
									<tbody>
										<?php foreach ($biodata_array as $key) {?>
										<tr>
											<td><?php echo $key['nama']?></td>
										</tr>
										<tr>
											<td><?php echo $key['nim']?></td>
										</tr>
										<tr>
											<td><?php echo $key['alamat']?></td>
										</tr>
<?php  									}?>
									</tbody>
								</table>
							</div>
						</div>
						</div>
					
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<h2>Selamat datang di DaniBlog yang paling Update masa kini!!</h2>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<h2>Disini Anda bisa menemukan pasangan Anda secara gratis, Ayo buruan jangan sampai ketinggalan!!</h2>
					</div>
				</div>
			</div>
			<!-- jQuery -->
			<script src="//code.jquery.com/jquery.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
			<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
			<script src="Hello World"></script>
		</body>
	</html>