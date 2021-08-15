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
    <link href="<?php echo base_url() ?>UserAssets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
    <?php include('navbar.php') ?>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="<?php echo site_url() ?>">Home</a></li>
                    <li>Design Gallery</li>
                    <li><?php echo $parent_category[0]['category_name'] ?></li>
                    <li><?php if(isset($category)) echo $category[0]['category_name'] ?></li>
                </ol>
                <h2>
                    <?php if(isset($category)) echo $category[0]['category_name']; else echo $parent_category[0]['category_name']; ?>
                </h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="portfolio-details-container">

                    <div class="owl-carousel portfolio-details-carousel">
                        <img src="<?php echo base_url().$selected[0]['image_file_name']; ?>" class="img-fluid" alt="">
                        <?php foreach($related as $x): ?>
                        <img src="<?php echo base_url().$x['image_file_name']; ?>" class="img-fluid" alt="">
                        <?php endforeach; ?>
                    </div>

                    <div class="portfolio-info">
                        <h3>
                            <?php if(isset($category)) echo $category[0]['category_name']; else echo $parent_category[0]['category_name']; ?>
                        </h3>
                        <p><?php  echo $selected[0]['image_desc']; ?>
                        </p>
                        <a class="btn btn-gfe btn-block mt-2 mx-auto py-auto mb-2 text-white"
                            href="<?php echo site_url() ?>/Welcome/getEstimate">Get Free Estimate Now</a>
                    </div>

                </div>

                <div class="portfolio-description">
                    <h2><?php echo $parent_category[0]['category_name']; ?></h2>
                    <p>
                        <?php echo $parent_category[0]['category_description']; ?>
                    </p>
                </div>

            </div>
        </section><!-- End Portfolio Details Section -->
        <?php include('designGallery.php'); ?>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include('footer.php') ?>





    <!-- Template Main JS File -->
    <script src="<?php echo base_url('UserAssets') ?>/js/main.js"></script>

</body>

</html>