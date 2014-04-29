<!DOCTYPE html>
<html lang="en">

  <?php $this->load->view('templates/head'); ?>

  <body>

    <?php $this->load->view('templates/header'); ?>
    
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default"> 

          <div class="panel-heading">
            <h3><?php echo isset($title) ? $title : '' ; ?></h3>
            <h5>Oleh <?php echo $result->poster_nip ?> pada <?php echo $result->waktu_dibuat?></h5>
          </div>

          <div class="panel-body">
            
            <?php echo $result->konten?>
               
          </div>

          <div class="panel-footer">
        
            <h4>Komentar</h4>
            
          </div>

        </div>
      </div>
    </div>

    <?php $this->load->view('templates/footer'); ?>

  </body>
</html>