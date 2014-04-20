<!DOCTYPE html>
<html lang="en">

  <?php $this->load->view('templates/head'); ?>

  <body>

    <?php $this->load->view('templates/header'); ?>
    
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default"> 

          <div class="panel-heading">
            <h3><?php echo isset($title) ? $title : 'Profil Karyawan' ; ?> </h3>
          </div>

          <div class="panel-body">

            <form class="form-horizontal" role="form" method="post">
              <div class="row">
                <div class="col-md-offset-3 col-md-4">
                  <img class="img-responsive" data-src="<?php echo $result['Foto']; ?>" alt="Foto">
                </div>
              </div>
              <div class="form-group">            
                <label for="nip" class="col-md-3 control-label">NIP</label>
                <div class="col-md-8">
                  <p class="form-control-static"><?php echo $result['NIP']; ?></p>
                </div>
              </div>
              <div class="form-group">            
                <label for="nama" class="col-md-3 control-label">Nama</label>
                <div class="col-md-8">
                  <p class="form-control-static"><?php echo $result['Nama']; ?></p>
                </div>
              </div>
              <div class="form-group">            
                <label for="alamat" class="col-md-3 control-label">Alamat</label>
                <div class="col-md-8">
                  <p class="form-control-static"><?php echo $result['Alamat']; ?></p>
                </div>
              </div>
              <div class="form-group">
                <label for="tempatlahir" class="col-md-3 control-label">Tempat Lahir</label>
                <div class="col-md-8">
                  <p class="form-control-static"><?php echo $result['Tempat Lahir']; ?></p>
                </div>
              </div>
              <div class="form-group">
                <label for="tanggallahir" class="col-md-3 control-label">Tanggal Lahir</label>
                <div class="col-md-8">
                  <p class="form-control-static"><?php echo $result['Tanggal Lahir']; ?></p>
                </div>
              </div>
              <hr>
              <div class="form-group">
                <label for="divisi" class="col-md-3 control-label">Divisi</label>
                <div class="col-md-8">
                  <p class="form-control-static"><?php echo $result['Divisi']; ?></p>
                </div>
              </div>
              <div class="form-group">
                <label for="jabatan" class="col-md-3 control-label">Jabatan</label>
                <div class="col-md-8">
                  <p class="form-control-static"><?php echo $result['Jabatan']; ?></p>
                </div>
              </div>
              <div class="form-group">
                <label for="tanggalditerima" class="col-md-3 control-label">Tanggal Diterima</label>
                <div class="col-md-8">
                  <p class="form-control-static"><?php echo $result['Tanggal Diterima']; ?></p>
                </div>
              </div>
                <div class="col-md-8 col-md-offset-3">
                  <p>
                    <a href="<?php echo site_url('karyawan/edit/'.$result['NIP']); ?>" class="btn btn-warning" role="button">Edit</a>
                    <a href="#" class="text-danger" role="button">Hapus</a>
                  </p>
                </div>
              </form>
          </div>

        </div>
      </div>
    </div>

    <?php $this->load->view('templates/footer'); ?>

  </body>
</html>