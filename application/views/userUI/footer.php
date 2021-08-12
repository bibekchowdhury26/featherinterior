<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>Feather Interior</h3>
                        <p>
                            Greater Kolkata <br>
                            West Bengal, India<br><br>
                            <strong>Phone:</strong> +91 1234 567890<br>
                            <strong>Email:</strong> contact@featherinterior.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="copyright">
                        &copy; Copyright <strong><span>Feather Interior</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
                        Designed & Developed by <a href="javascript:void(0);">Bibek Chowdhury</a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Modular Kitchen</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">False Ceiling</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Electric Room</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Wall Panneling</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Wall Paper</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Wall Paint</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter to get updated with Exclusive offers</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="container">


    </div>
</footer><!-- End Footer -->
<a data-toggle="modal" data-target="#consultation_form" class="get-consult btn text-white text-uppercase">Get Online
    Free Consultation</a>
<a href="#" class="btn-contact-form"><i class="icofont-ui-messaging"></i></a>
<div id="preloader"></div>
<div class="modal fade" id="consultation_form" tabindex="-1" role="dialog" aria-labelledby="consultation_formTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text=-danger" id="exampleModalLongTitle">Get Online Free Consultation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo site_url('User/getConsultation') ?>" method="post">
                <div class="modal-body">

                    <div class="from-group">
                        <label for="name">Full Name</label>
                        <input type="text" required name="name" id="name" class="form-control">
                    </div>
                    <div class="from-group">
                        <label for="phno">Phone No.</label>
                        <input type="text" required name="phone" id="phno" class="form-control">
                    </div>
                    <div class="from-group">
                        <label for="email">Email ID</label>
                        <input type="text" required name="email_id" id="email" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Get Free Consultation</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Vendor JS Files -->
<script src="<?php echo base_url() ?>UserAssets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>UserAssets/vendor/jquery.easing/jquery.easing.min.js"></script>
<!-- <script src="<?php echo base_url() ?>UserAssets/vendor/php-email-form/validate.js"></script> -->
<script src="<?php echo base_url() ?>UserAssets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>UserAssets/vendor/venobox/venobox.min.js"></script>
<script src="<?php echo base_url() ?>UserAssets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>UserAssets/vendor/aos/aos.js"></script>