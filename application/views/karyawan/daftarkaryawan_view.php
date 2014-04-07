<!DOCTYPE html>
<html lang="en">

  <?php $this->load->view('templates/head'); ?>

  <body>
    <?php $this->load->view('templates/header'); ?>

    <div class="container">
      <form class="form-signin" role="form">
        <h2 class="form-signin-heading text-center">Selamat Datang</h2>
        <input type="email" class="form-control" placeholder="NIP" required autofocus>
        <input type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

      <div class="col-md-8 col-md-offset-2 jumbotron">
        asdsads
      </div>
    </div> <!-- /container -->
    <?php $this->load->view('templates/footer'); ?>
  </body>
</html>