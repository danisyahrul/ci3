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
    <br>
    <br>

  </div>
    <?php
    // Kita looping data dari controller
    foreach ($blog as $key) :
    ?>
  <?php if( $key['thumbnail'] ) : ?>
    <div class="text-center">
    <h1 class="card-title text-center"><b><?php echo $key['judul'] ?></b></h1>
    <br><img width="150px" class="card-img-top" src="<?php echo base_url('assets/uploads/') . 
    $key['thumbnail'] ?>" alt="Card image cap"> 
    </div>
  <?php endif; ?>

  <div class="card-body">
   <br>
   <br>
   <br> 

   <!-- Batasi cuplikan konten dengan substr sederhana -->
   <p class="card-text"><?php echo $key['isi_konten']?></p>
   <br>
   <br>

    </div>
  </div>

<?php endforeach; ?>

<p>

</p>
</div>
</body>
</html>