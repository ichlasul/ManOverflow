<!DOCTYPE html>
<html lang="en">

  <?php $this->load->view('templates/head'); ?>

  <body>

    <?php $this->load->view('templates/header'); ?>
    
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default"> 

          <div class="panel-heading">
            <h3><?php echo isset($title) ? $title : 'Informasi TrackRecord' ; ?> </h3>
          </div>

          <div class="panel-body">           
              <div class="form-group">
                <label for="nama" class="col-md-8 control-label">Nama TrackRecord</label>
                <div class="col-md-8">
                  <p class="form-control-static"><?php echo $result->nama; ?></p>
                </div>
              </div>
              <div class="form-group">            
                <label for="namakaryawan" class="col-md-8 control-label">Nama Karyawan</label>
                <div class="col-md-8">
                  <p class="form-control-static">
                    <?php 
                    $listPP = explode(", ", $result->NamaKaryawan);
                    $listP = "";
                      foreach ($listPP as $PP) {
                        if ($this->ion_auth->is_admin() === FALSE)
                          $listP .= $PP . "<br>";
                        else
                        {
                          $nip = explode(" ", $PP);
                          echo '<a href="'. site_url('karyawan/profil/'.$nip[0]) . '">' . $PP . '</a><br>';
                        }
                      }
                    echo $listP; ?>
                  </p>
                </div>
              </div>                  
                <div class="col-md-8 col-md-offset-3">
                  <p>
                    <?php                
                  if ($mode == 1)
                  echo '<a href="' .  site_url('trackrecord/edit/'. $result->id) . '" class="btn btn-warning" role="button">Edit</a><a href="" class="text-danger" role="button" data-toggle="modal" data-target="#modal-delete-' . $result->id. '"> Hapus</a>';
                ?>
                  </p>
                  <div class="modal fade" id="modal-delete-<?php echo $result->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-label-<?php echo $result->id; ?>" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h3 class="modal-title" id="modal-label-<?php echo $result->id; ?>">Yakin Menghapus?</h3>
                        </div>
                        <div class="modal-body">
                          <h3>TrackRecord <?php echo $result->nama; ?></h3>
                        </div>
                        <div class="modal-footer">
                          <a role="button" class="btn btn-default" data-dismiss="modal">Batal</a>                          
                          <a href="<?php echo site_url('trackrecord/hapus/'.$result->id); ?>" role="button" class="btn btn-danger">Hapus TrackRecord</a>
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