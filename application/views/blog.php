<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div >
     <div class="container">
      <h1>Blog</h1>
      <?php if($this->session->userdata('level') == 0) { ?>
      <a href="<?php echo base_url("index.php/blog/buat/ ")?>"><button type="button" class="btn btn-info">
        <span class="glyphicon glyphicon-plus"></span> ADD
      </button></a>

       <a href="<?php echo base_url("index.php/kategori/ ")?>"><button type="button" class="btn btn-info">
        <span class="glyphicon glyphicon-plus"></span> Kategori
      </button></a>
      <?php } ?>
    </div>
    <br>
    <br>

  </div>
  <?php
  // Kita looping data dari controller
  foreach ($blog_list as $key) :
  ?>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
  <?php if( $key['thumbnail'] ) : ?>
    <div class="text-center">
    <img height="200px" class="card-img-top" src="<?php echo base_url('assets/uploads/') . 
    $key['thumbnail'] ?>" alt="Card image cap">
    </div>
  <?php endif; ?>

  <div class="card-body">
   <h3 class="card-title"><b><?php echo $key['judul'] ?></b></h3>

   <!-- Batasi cuplikan konten dengan substr sederhana -->
   <p class="card-text"><?php echo substr( $key['isi_konten'] , 0, 
    80)?>...</p>

    <!-- Untuk link detail -->
    <a href="<?php echo base_url('index.php/blog/baca/') . $key['id_blog'] ?>" class="btn 
      btn-primary">Baca</a>
      <?php if($this->session->userdata('level') == 0) { ?>
      <a href="<?php echo base_url('index.php/blog/edit/') . $key['id_blog'] ?>" class="btn 
      btn-warning">Edit</a>
      <a href="<?php echo base_url('index.php/blog/hapus/') . $key['id_blog'] ?>" class="btn 
      btn-danger">Hapus</a>
      <?php } ?>
    </div>
    <br>
    </div>

<?php endforeach; ?>
  </div>
<p>

</p>
</div>
</body>
</html>