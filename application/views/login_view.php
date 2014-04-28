<!DOCTYPE html>
<html lang="en">

  <?php $this->load->view('templates/head'); ?>

  <body>

    <?php $this->load->view('templates/header'); ?>

    <div class="container">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">

          <div class="panel-heading">
            <h3>Selamat Datang</h3>
          </div>

          <div class="panel-body">
              <?php $this->load->view('forms/login_form'); ?>
          </div>
        </div>

      </div>
    </div> <!-- /container -->
    
    <?php $this->load->view('templates/footer'); ?>
  
  </body>
</html>