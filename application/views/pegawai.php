<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BimsBlog</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	 <div class="container">
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
  			<a class="navbar-brand" href="#">Bima Guntur Dwicahya S</a>
  		</div>
  
  		<!-- Collect the nav links, forms, and other content for toggling -->
  		<div class="collapse navbar-collapse navbar-ex1-collapse">
  			<ul class="nav navbar-nav">
  				<li class="active"><a href="<?php echo site_url()?>/pegawai">Daftar Pegawai</a></li>
  			</ul>

  			<ul class="nav navbar-nav navbar-right">
  				<li class="dropdown">
  					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Member</a></li>
              <li><a href="#">Administrator</a></li>
              <li><a href="#">Register?</a></li>
  					</ul>
  				</li>
  			</ul>
  		</div><!-- /.navbar-collapse -->
  	</div>
  </nav>
  <div >
  	<div class="container">
  		<h1>Data Pegawai</h1>
  	</div>
  </div>
	
					<table class="table table-hover">
						<thead>
							<tr>
						<th>No</th>		
						<th>Nama</th>
						<th>Alamat</th>
						<th>Tanggal Lahir</th>
            <th>Foto</th>
						<th>Action</th>
					</tr>
							</thead>
						<tbody>

							          <?php foreach ($pegawai_list as $key => $value): ?>
            <tr>
              <td><?php echo $value['idpegawai'] ?></td>
              <td><?php echo $value['namaPegawai'] ?></td>
              <td><?php echo $value['alamatPegawai'] ?></td>
              <td><?php echo $value['tanggalLahirPegawai'] ?></td>
              <td>
                  <img src="<?php echo base_url()?>assets/uploads/<?php echo $value['Foto']; ?>" width="90" height="90"/> 
            </td>
              <td>
                <a href="<?php echo base_url("index.php/Pegawai/update/".$value['idpegawai']) ?>" class="btn btn-sm btn-success"> <span class="glyphicon glyphicon-pencil"></span>Edit</a>
                <a href="<?php echo base_url("index.php/Pegawai/delete/".$value['idpegawai']) ?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span>Hapus</a>
                <a href="<?php echo base_url("index.php/Pendidikan/index/".$value['idpegawai']) ?>" class="btn btn-sm btn-warning">Lihat Pendidikan</a>
              </td>
            </tr>
            
          <?php endforeach ?>
							</tbody>
					</table>
            <p>
        <a href="<?php echo base_url("index.php/Pegawai/create/ ")?>"><button type="button" class="btn btn-info">
      <span class="glyphicon glyphicon-plus"></span> ADD
    </button></a>
      </p>
</div>
</body>
</html>