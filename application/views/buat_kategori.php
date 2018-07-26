

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</
    <div class="container">
  
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    </div>
  	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	<?php echo form_open_multipart('kategori/buat'); ?>	
	<legend>Tambah Data Kategori</legend>
	<?php echo validation_errors();?>

	<div class="form-group">
		<label for="">Nama Kategori</label>
		<input type="text" class="form-control" name="nama_kategori" value="" placeholder="Input field">
	</div>

	<button type="submit" class="btn btn-primary">ADD</button>
	<?php echo form_close(); ?>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
</div>
</div>

