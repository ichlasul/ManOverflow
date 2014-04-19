<!DOCTYPE html>
<html lang="en">

  <?php $this->load->view('templates/head'); ?>

  <body>
    <?php $this->load->view('templates/header'); ?>

    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3>Daftar Karyawan</h3>
          </div>

          <div class="panel-body">
            <div class="row">
              <form class="form" action="<?php echo site_url('karyawan/search'); ?>" method="post" role="form">
                <div class="form-group col-md-9">
                  <label class="sr-only" for="keyword">Kata Kunci Pencarian</label>
                  <input type="text" class="form-control input-lg" name="keyword" id="keyword" placeholder="Masukkan Kata Kunci Pencarian">
                </div>
                <div class="col-md-3">
                  <button type="submit" class="btn btn-primary btn-lg col-md-12">Cari</button>
                </div>
              </form>
            </div>
  
            <div class="row">
              <div id="result">
                <?php if (is_null($result)) { ?>
                  <div class="alert alert-danger">
                    Oh tidak, karyawan tidak ditemukan!
                  </div>
                <?php } else {
                          foreach($result as $row){
                          echo '<p>'. $row->Nama .'</p>';

                  }
                      } ?>
              <div>
            <div> <!-- row -->
          </div>
        </div>
      </div> 
    </div> <!-- /container -->
    <?php $this->load->view('templates/footer'); ?>
  </body>
</html>