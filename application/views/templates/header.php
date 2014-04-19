<nav class="navbar navbar-inverse" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('karyawan'); ?>">Versatile</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <?php
      	//Periksa sedang login atau tidak
      	//Ubah navbar sesuai user
      	if ($this->ion_auth->logged_in() === TRUE) {
      		if ($this->ion_auth->is_admin() === TRUE) {
      			$this->load->view('templates/navbar-admin');
      		} else {
      			$this->load->view('templates/navbar-member');
      		}
      	}
      ?>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>