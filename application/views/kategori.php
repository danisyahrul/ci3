<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
 <script type="text/javascript">
   $(document).ready(function() {
        $('#example').DataTable();
    } );
 </script>
</head>
<body>
  <div >
    <div class="container">
      <h1>Data Kategori</h1>
      <br>
      <a href="<?php echo base_url("index.php/kategori/buat/ ")?>"><button type="button" class="btn btn-info">
      <span class="glyphicon glyphicon-plus"></span> ADD
    </button></a>
    <br>
    <br>
    </div>
  </div>
  <div class="container">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
            <th>ID Kategori</th>   
            <th>Nama Kategori</th>
            <th>Action</th>
          </tr>
              </thead>
            <tbody>

                        <?php foreach ($kategori_list as $value): ?>
            <tr>
              <td><?php echo $value['id_kategori'] ?></td>
              <td><?php echo $value['nama_kategori'] ?></td>
              <td>
                <a href="<?php echo base_url("index.php/kategori/edit/".$value['id_kategori']) ?>" class="btn btn-sm btn-warning"> <span class="glyphicon glyphicon-pencil"></span>Edit</a>
                <a href="<?php echo base_url("index.php/kategori/hapus/".$value['id_kategori']) ?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span>Hapus</a>
              </td>
            </tr>
            
          <?php endforeach ?>
              </tbody>
          </table>
            <p>
        
      </p>
      </div>
</div>
</body>
</html>