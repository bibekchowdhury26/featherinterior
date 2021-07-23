<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('UserAssets') ?> /img/favicon.png" rel="icon">
    <link href="<?php echo base_url('UserAssets') ?> /img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('UserAssets') ?> /vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('UserAssets') ?> /vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?php echo base_url('UserAssets') ?> /vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url('UserAssets') ?> /vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?php echo base_url('UserAssets') ?>/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url('UserAssets') ?>/vendor/aos/aos.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>UserAssets/vendor/jquery/jquery.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('UserAssets') ?>/css/style.css" rel="stylesheet">

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

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <!-- <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol class="float-left" style="position:absolute;">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="">Free Estimate</a></li>
                </ol>
                <h2 class="text-center">Get Free Estimate</h2>

            </div>
        </section> -->
        <!-- End Breadcrumbs -->
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Free Estimate</li>
                </ol>
                <h2>Get Free Estimate</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <?php //include() ?>

    </main><!-- End #main -->

    <?php include('footer.php') ?>





    <!-- Template Main JS File -->
    <script src="<?php echo base_url('UserAssets') ?>/js/main.js"></script>

    <script>
    $(document).ready(function() {
        var currentGfgStep, nextGfgStep, previousGfgStep;
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next-step").click(function() {

            currentGfgStep = $(this).parent();
            nextGfgStep = $(this).parent().next();
            // console.log($("fieldset").index(currentGfgStep));
            if ($("fieldset").index(currentGfgStep) == 0 && $('#homeplan').get(0).files.length === 0) {
                // console.log($('#homeplan').get(0).files.length);
                $('#imageError').text('Please Upload an Image File');

            } else if ($("fieldset").index(nextGfgStep) == 3) {
                $('.progress-bar').css("background-color", "green");
                $("fieldset").css("border", "2px double green");

                $('#imageError').text('');
                $("#progressbar li").eq($("fieldset")
                    .index(nextGfgStep)).addClass("active");

                nextGfgStep.show();
                currentGfgStep.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        opacity = 1 - now;

                        currentGfgStep.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        nextGfgStep.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            } else {
                $('#imageError').text('');
                $("#progressbar li").eq($("fieldset")
                    .index(nextGfgStep)).addClass("active");

                nextGfgStep.show();
                currentGfgStep.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        opacity = 1 - now;

                        currentGfgStep.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        nextGfgStep.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            }
        });

        $(".previous-step").click(function() {

            currentGfgStep = $(this).parent();
            previousGfgStep = $(this).parent().prev();

            $("#progressbar li").eq($("fieldset")
                .index(currentGfgStep)).removeClass("active");

            previousGfgStep.show();

            currentGfgStep.animate({
                opacity: 0
            }, {
                step: function(now) {
                    opacity = 1 - now;

                    currentGfgStep.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previousGfgStep.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(--current);
        });

        function setProgressBar(currentStep) {
            var percent = parseFloat(100 / steps) * current;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width", percent + "%")
        }

        $(".submit").click(function() {
            return false;
        })
    });

    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-btn').hide();
                $('.file-upload-content').show();

                $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.file-upload-btn').show();

        $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function() {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function() {
        $('.image-upload-wrap').removeClass('image-dropping');
    });
    var $quantityArrowMinus = $(".quantity-arrow-minus");
    var $quantityArrowPlus = $(".quantity-arrow-plus");
    var $quantityNum = $(".quantity-num");

    $quantityArrowMinus.click(function() {
        if ($(this).parent().find(".quantity-num").val() >= 1) {
            $(this).parent().find(".quantity-num").val(+$(this).parent().find(".quantity-num").val() - 1);
        }
    });
    $quantityArrowPlus.click(function() {
        $(this).parent().find(".quantity-num").val(+$(this).parent().find(".quantity-num").val() + 1);
    });

    // function quantityMinus() {

    // }

    // function quantityPlus() {
    //   $(this).parent().find(".quantity-num").val($(this).parent().find(".quantity-num").val() + 1);
    // }
    </script>

</body>

</html>