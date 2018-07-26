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
  			<a class="navbar-brand" href="#">Tes</a>
  		</div>
  
  		<!-- Collect the nav links, forms, and other content for toggling -->
  		<div class="collapse navbar-collapse navbar-ex1-collapse">
  			<ul class="nav navbar-nav">
  				<li><a href="<?php echo base_url('index.php/blog/'); ?>">Blog</a></li>
          <?php if($this->session->userdata('level') == 0) { ?>
          <li><a href="<?php echo base_url('index.php/kategori/'); ?>">Kategori</a></li>
          <?php } ?>
          <?php if($this->session->has_userdata('logged_in')) { ?>
          <li><a href="<?php echo base_url('index.php/login/do_logout'); ?>">Logout</a></li>
          <?php } ?>
        </ul>

  		</div><!-- /.navbar-collapse -->
  	</div>
  </nav>