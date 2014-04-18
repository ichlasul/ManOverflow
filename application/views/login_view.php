<!DOCTYPE html>
<html lang="en">

  <?php $this->load->view('templates/head'); ?>

  <body>

    <?php $this->load->view('templates/header'); ?>

    <div class="container">
      <div class=" col-md-4 col-md-offset-4">
        <div class="panel panel-default">

          <div class="panel-heading">
            <h3>Selamat Datang</h3>
          </div>

          <div class="panel-body">
            <form class="form-signin" role="form" action="login/validate_credentials" method="post">
              <input name = "NIP" type="text" class="form-control" placeholder="NIP" required autofocus>
              <input name = "Password" type="password" class="form-control" placeholder="Password" required>
              <label class="checkbox">
                <input type="checkbox" name="remember-me" value="TRUE"> Ingat Saya
              </label>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
            </form>
          </div>
        </div>

      </div>
    </div> <!-- /container -->
    
    <?php $this->load->view('templates/footer'); ?>
  
  </body>
</html>