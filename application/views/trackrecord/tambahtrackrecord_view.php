<!DOCTYPE html>
<html lang="en">
<head>
</head>
  
  <?php $this->load->view('templates/head'); ?>

  <body>

    <?php $this->load->view('templates/header'); ?>
    
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default"> 

          <div class="panel-heading">
            <h3><?php echo isset($title) ? $title : 'Tambah TrackRecord'; ?></h3>            
          </div>

          <div class="panel-body">

              <?php $this->load->view('forms/tambahtrackrecord_form'); ?>

          </div>

        </div>
      </div>
    </div>

    <?php $this->load->view('templates/footer'); ?>

  </body>
</html>