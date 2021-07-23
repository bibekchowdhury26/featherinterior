<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container-fluid d-flex">
      <div class="contact-info mr-auto">
         <a class="" href="mailto:help.feather@gmail.com"><i class="icofont-envelope"></i>help.feather@gmail.com</a>
         <a class="" href="tel:+919123382534"><i class="icofont-phone"></i>+91 91233 82534</a>
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        <a href="#" class="login_signup ml-auto"  data-toggle="modal" data-target="#login_signup_form">Login/Register</a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex align-items-center">
      <a href="<?php echo site_url() ?>" class="logo float-left ml-3"><img src="<?php echo base_url('UserAssets') ?>/img/logo.png" alt="" class="img-fluid"></a>
      <h1 class="logo ml-1"><a href="<?php echo site_url() ?>">Interior</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      

      <nav class="nav-menu ml-auto d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo site_url() ?>">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Design Gallery</a></li>
          <li><a href="#pricing">Packages</a></li>
          <li><a href="#team">Our Team</a></li>
          <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Contact</a></li>
          <li><a href="#" class="login_signup ml-auto"  data-toggle="modal" data-target="#login_signup_form">Login/Register</a></li>
          &nbsp;&nbsp;&nbsp;
          <a class="btn btn-gfe mt-2 mx-auto py-auto mb-2 text-white" href="<?php echo site_url('Welcome/getEstimate') ?>">Get Free Estimate</a>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

<?php include('login_signup.php'); ?>