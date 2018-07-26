

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</
    <div class="container">
  
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    </div>
  	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	<?php echo form_open_multipart('blog/edit/'.$this->uri->segment(3)); ?>	
	<legend>Edit Data Blog</legend>
	<?php echo validation_errors();?>
<?php
  // Kita looping data dari controller
  foreach ($blog as $key) :
  ?>
	<div class="form-group">
		<label for="">Judul</label>
		<input type="text" class="form-control" name="judul" value="<?php echo $key['judul']; ?>" placeholder="Input field">
	</div>

	<div class="form-group">
    <label for="">Kategori</label><br>
    <select name="kategori" class="form-control">
      <?php foreach ($kategori as $value) { ?>
        <option value="<?php echo $value['id_kategori']; ?>" <?php if($key['id_kategori'] == $value['id_kategori']) { echo "selected"; } ?>><?php echo $value['nama_kategori'] ?></option>
      <?php } ?>
    </select>
    <br>
  </div>

	<div class="form-group">
		<label for="">Isi Konten</label><br>
		<textarea name="isi_konten" class="form-control"><?php echo $key['isi_konten']; ?></textarea>
	</div>

	<button type="submit" class="btn btn-primary">Edit</button>
  <?php endforeach; ?>
	<?php echo form_close(); ?>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
</div>
</div>

