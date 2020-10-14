<!-- banner -->
<section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/logo.png') ?>" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#banner">Home</a></li>
                <li class=""><a href="#service">Services</a></li>
                <li class=""><a href="#about">About</a></li>
                <li class=""><a href="#testimonial">Testimonial</a></li>
                <li class=""><a href="#contact">Contact</a></li>
                <li class=""><a href="#" data-toggle="modal" data-target="#onphpidLogin">Login</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="<?= base_url('assets/img/logo.png') ?>" class="img-responsive">
            </div>
            <div class="banner-text text-center">
              <h1 class="white">Healthcare at your desk!!</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="#contact" class="btn btn-appoint">Make an Appointment.</a>
            </div>
            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- End of banner -->
<div id="onphpidLogin" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">Dimohon Untuk Login</h4>
          </div>
          <div class="modal-body">
            <!-- form login -->
            <form action="<?php echo base_url('Login/cek_log');?>" method="post">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="txt_user" placeholder="Username" class="form-control" />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="txt_pass" placeholder="Password" class="form-control" />
              </div>
              <div class="text-right">
                <button class="btn btn-danger" type="submit">Login</button>
              </div>
            </form>
            <!-- end form login -->
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->