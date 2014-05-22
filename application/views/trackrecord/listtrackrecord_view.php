<!DOCTYPE html>
<html lang="en">

  <?php $this->load->view('templates/head'); ?>

  <body>

    <?php $this->load->view('templates/header'); ?>

    <div class="container">
      <div class="col-md-12">
        <div class="panel panel-default">
          
          <div class="panel-heading">
            <h3><?php echo isset($title) ? $title : 'My TrackRecord'; ?></h3>
          </div>

          <div class="panel-body">
            
            <div class="row">

              <?php $this->load->view('trackrecord/list_result'); ?>

            <div> <!-- row -->

          </div>

        </div> <!-- panel -->
      </div> 
    </div> <!-- /container -->

    <?php $this->load->view('templates/footer'); ?>

  </body>
</html>