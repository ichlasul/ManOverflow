<!DOCTYPE html>
<html lang="en">

  <?php $this->load->view('templates/head'); ?>

  <body>
    <?php $this->load->view('templates/header'); ?>

    <div class="container">
      <div class="col-md-8 col-md-offset-2 jumbotron">
        <form class="form" role="form">
          <div class="form-group col-md-9">
            <label class="sr-only" for="keyword">Kata Kunci Pencarian</label>
            <input type="text" class=" form-control input-lg" id="keyword" placeholder="Masukkan Kata Kunci Pencarian">
          </div>
          <button type="submit" class="btn btn-primary btn-lg col-md-3">Cari</button>
        </form>

        <?php 

        if (is_null($result)) {
          echo "NULL";
        } else{
          echo "ADA";
          }
          ?>;
      </div>
    </div> <!-- /container -->
    <?php $this->load->view('templates/footer'); ?>
  </body>
</html>