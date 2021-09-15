<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Feather Interior</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url() ?>UserAssets/img/favicon.png" rel="icon">
    <link href="<?php echo base_url() ?>UserAssets/img/favicon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url() ?>UserAssets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>UserAssets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>UserAssets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>UserAssets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>UserAssets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>UserAssets/vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet"
        href="<?php echo base_url() ?>\UserAssets\vendor\owl.carousel\assets\owl.theme.default.min.css">
    <script src="<?php echo base_url() ?>UserAssets/vendor/jquery/jquery.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url() ?>UserAssets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Day - v2.2.1
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <?php include 'navbar.php'; ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container hero-inner position-relative">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <a class="btn btn-gfe btn-gfe-mob mt-2 mx-auto py-auto mb-2 text-white" href="#">Get Free
                        Estimate</a>
                    <h1>Get personalised home interiors in <span class="text-danger">just 40 days</span></h1>
                    <h2><strong class="text-danger">India's no.1</strong> Customized Interior Decorator team</h2>
                    <a data-toggle="modal" data-target="#consultation_form" class="btn-get-started">Get
                        Online Free Consultation</a>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <form method="post" action="<?php echo site_url('User/getConsultation') ?>">
                        <h2 class="text-center">Get Consultation</h2>
                        <div class="form-group">
                            <label class="text-dark" for="">Name</label>
                            <input class="form-control" type="text" name="name" id="">
                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="">Email</label>
                            <input class="form-control" type="email" name="email" id="">
                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="">Phone No.</label>
                            <input class="form-control" type="text" name="phone" id="">
                        </div>
                        <div class="from-group justify-content-center">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </section><!-- End Hero -->

    <main id="main">



        <!-- ======= About Section ======= -->
        <?php include('about.php') ?>



        <!-- ======= Clients Section ======= -->
        <?php include('client.php') ?>

        <!-- ======= Portfolio Section ======= -->
        <?php include('designGallery.php') ?>

        <!-- ======= Services Section ======= -->
        <?php include('services.php') ?>

        <!-- ======= Cta Section ======= -->
        <!-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section> -->
        <!-- End Cta Section -->

        <!-- ======= Pricing Section ======= -->
        <?php include('price.php') ?>

        <!-- ======= Team Section ======= -->
        <?php //include('team.php') ?>

        <!-- ======= Contact Section ======= -->
        <?php include('contact.php') ?>

    </main><!-- End #main -->

    <?php include('footer.php') ?>




    <!-- Template Main JS File -->
    <script src="<?php echo base_url() ?>UserAssets/js/main.js"></script>

</body>

</html>