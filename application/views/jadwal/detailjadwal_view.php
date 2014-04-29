<!DOCTYPE html>
<html lang="en">

  <?php $this->load->view('templates/head'); ?>

  <body>

    <?php $this->load->view('templates/header'); ?>
    
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default"> 

          <div class="panel-heading">
            <h3><?php echo isset($title) ? $title : 'Informasi Jadwal' ; ?> </h3>
          </div>

          <div class="panel-body">

            <form class="form-horizontal" role="form" method="post">              
              <div class="form-group">            
                <label for="nomor" class="col-md-3 control-label">Kode Proyek</label>
                <div class="col-md-8">
                  <p class="form-control-static"><?php echo $result->nomor; ?></p>
                </div>
              </div>
              <div class="form-group">            
                <label for="judul" class="col-md-3 control-label">Judul Proyek</label>
                <div class="col-md-8">
                  <p class="form-control-static"><?php echo $result->judul; ?></p>
                </div>
              </div>
              <div class="form-group">            
                <label for="deskripsi" class="col-md-3 control-label">Deskripsi</label>
                <div class="col-md-8">
                  <p class="form-control-static"><?php echo $result->deskripsi; ?></p>
                </div>
              </div>  
              <hr>            
              <div class="form-group">
                <label for="tanggalmulai" class="col-md-3 control-label">Tanggal Mulai</label>
                <div class="col-md-8">
                  <p class="form-control-static"><?php echo $result->tanggal_mulai; ?></p>
                </div>
              </div>
              <div class="form-group">
                <label for="tanggalselesai" class="col-md-3 control-label">Tanggal Selesai</label>
                <div class="col-md-8">
                  <p class="form-control-static"><?php echo $result->tanggal_selesai; ?></p>
                </div>
              </div>
              <hr>
              <div class="form-group">
                <label for="prioritas" class="col-md-3 control-label">Prioritas</label>
                <div class="col-md-8">
                  <p class="form-control-static"><?php echo $result->prioritas; ?></p>
                </div>
              </div>
              <div class="form-group">            
                <label for="pemimpinproyek" class="col-md-3 control-label">Pemimpin Proyek</label>
                <div class="col-md-8">
                  <p class="form-control-static"><?php echo $result->pemimpin_proyek; ?></p>
                </div>
              </div>
              <div class="form-group">            
                <label for="pesertaproyek" class="col-md-3 control-label">Peserta Proyek</label>
                <div class="col-md-8">
                  <p class="form-control-static"><?php echo $result->peserta_proyek; ?></p>
                </div>
              </div>                  
                <div class="col-md-8 col-md-offset-3">
                  <p>
                    <a href="<?php echo site_url('jadwal/edit/'.$result->nomor); ?>" class="btn btn-warning" role="button">Edit</a>
                    <a href="" class="text-danger" role="button" data-toggle="modal" data-target="#modal-delete-<?php echo $result->nomor; ?>">Hapus</a>
                  </p>
                  <div class="modal fade" id="modal-delete-<?php echo $result->nomor; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-label-<?php echo $result->nomor; ?>" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h3 class="modal-title" id="modal-label-<?php echo $result->nomor; ?>">Yakin Menghapus?</h3>
                        </div>
                        <div class="modal-body">
                          <h3>Proyek <?php echo $result->nomor . ' : '. $result->judul; ?></h3>
                          <h5>Tanggal Mulai : <?php echo $result->tanggal_mulai; ?></h5>
                          <h5>Tanggal Selesai : <?php echo $result->tanggal_selesai; ?></h5>
                          <h5>Pemimpin Proyek : <?php echo $result->pemimpin_proyek; ?></h5>
                        </div>
                        <div class="modal-footer">
                          <a role="button" class="btn btn-default" data-dismiss="modal">Batal</a>
                          <a href="<?php echo site_url('jadwal/hapus/'.$result->nomor); ?>" role="button" class="btn btn-danger">Hapus Jadwal</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
          </div>

        </div>
      </div>
    </div>

    <?php $this->load->view('templates/footer'); ?>

  </body>
</html>