  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
          <li class="active"><a href="../">Daftar Pegawai</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Member</a></li>
              <li><a href="#">Administrator</a></li>
              <li><a href="#">Register?</a></li>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<?php echo form_open('pegawai/update/'.$this->uri->segment(3)); ?>
  <legend>Edit Data Pegawai</legend>
  <?php echo validation_errors(); ?>
  <div class="form-group">
    <label for="">Nama Pegawai</label>
    <input type="text" class="form-control" name="namaPegawai" id="namaPegawai" value="<?php echo $pegawai[0]->namaPegawai ?>" placeholder="Input field">
  </div>
  <div class="form-group">
    <label for="">Alamat Pegawai</label>
    <input type="text" class="form-control" name="alamatPegawai" id="alamatPegawai" value="<?php echo $pegawai[0]->alamatPegawai ?>" placeholder="Input field">
  </div>
    <div class="form-group">
    <label for="">Tanggal Lahir</label>
    <input type="Date" class="form-control" name="tanggalLahir" id="tanggalLahir" value="<?php echo $pegawai[0]->tanggalLahirPegawai ?>" placeholder="Input field">
  </div>
  <button type="submit" class="btn btn-warning">SUBMIT</button>
  <?php echo form_close(); ?>
</div>
</div>

