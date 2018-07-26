

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</
    <div class="container">
  
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    </div>
  	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	<?php echo form_open_multipart('blog/buat'); ?>	
	<legend>Tambah Data Pegawai</legend>
	<?php echo validation_errors();?>
  <?php if($error) {
    echo $error;
    }?>

	<div class="form-group">
		<label for="">Judul</label>
		<input type="text" class="form-control" name="judul" value="" placeholder="Input field">
	</div>
  <div class="form-group">
    <label for="">Kategori</label><br>
    <select name="kategori" class="form-control">
      <?php foreach ($kategori as $key) { ?>
        <option value="<?php echo $key['id_kategori']; ?>"><?php echo $key['nama_kategori'] ?></option>
      <?php } ?>
    </select>
    <br>
  </div>

	<div class="form-group">
		<label for="">Isi Konten</label><br>
		<textarea name="isi_konten" class="form-control"></textarea>
	</div>

  <div class="form-group">
    <label for="">Foto</label>
    <input type="file" name="userfile" size="20" />
  </div>
	<button type="submit" class="btn btn-primary">ADD</button>
	<?php echo form_close(); ?>
</div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
</div>
</div>

