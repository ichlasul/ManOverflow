<!DOCTYPE html>
<html lang="en">

  <?php $this->load->view('templates/head'); ?>

  <body>
    <?php $this->load->view('templates/header'); ?>

    <div class="container">

      <form class="form-signin col-md-4 col-md-offset-4" role="form" action="login/validate_credentials" method="post">
        <h2 class="form-signin-heading text-center">Selamat Datang</h2>
        <input name = "NIP" type="text" class="form-control" placeholder="NIP" required autofocus>
        <input name = "Password" type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
    <?php $this->load->view('templates/footer'); ?>
  </body>
</html>