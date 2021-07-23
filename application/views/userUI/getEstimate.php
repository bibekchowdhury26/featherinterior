<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Get Free Estimate</title>
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
    <style>
    h2 {
        color: #e71c24;
    }

    #form {
        text-align: center;
        position: relative;
        margin-top: 20px
    }

    #form fieldset {
        background: white;
        border: 2px double #e71c24;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding: 20px;
        /* padding-bottom: 20px; */
        position: relative
    }

    #form fieldset .inputs {
        padding: 20px;
    }

    .finish {
        text-align: center
    }

    #form fieldset:not(:first-of-type) {
        display: none
    }

    #form .previous-step,
    .next-step {
        width: 100px;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px 10px 0px;
        /* float: right */
    }

    .form,
    .previous-step {
        background: #616161;
    }

    .form,
    .next-step {
        background: #e71c24;
    }

    #form .previous-step:hover,
    #form .previous-step:focus {
        background-color: #000000
    }

    #form .next-step:hover,
    #form .next-step:focus {
        background-color: #e71c24
    }

    .text {
        color: #2F8D46;
        font-weight: normal
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey;
        width: 100%;
    }

    #progressbar .active {
        color: #e71c24
    }

    #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 25%;
        float: left;
        position: relative;
        font-weight: 400
    }

    #progressbar #step1:before {
        content: "1"
    }

    #progressbar #step2:before {
        content: "2"
    }

    #progressbar #step3:before {
        content: "3"
    }

    #progressbar #step4:before {
        content: "\2713"
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #e71c24
    }

    #progressbar #step4.active:before,
    #progressbar #step4.active:after {
        background: green;
    }

    #progressbar #step4.active strong {
        color: green;
    }

    .progress {
        height: 20px
    }

    .progress-bar {
        background-color: #e71c24
    }

    section {
        /* padding: 60px 0; */
        overflow: hidden;
    }

    label {
        color: #e71c24;
    }

    .file-upload {
        background-color: #ffffff;
        width: 100%;
        margin: 0 auto;
        padding: 20px;
    }

    ul {
        padding-left: 0px;
    }

    .file-upload-btn {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #e71c24;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #de7074;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .file-upload-btn:hover {
        background: #de7074;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .file-upload-btn:active {
        border: 0;
        transition: all .2s ease;
    }

    .file-upload-content {
        display: none;
        text-align: center;
    }

    .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .image-upload-wrap {
        margin-top: 20px;
        border: 4px dashed #e71c24;
        position: relative;
    }

    .image-dropping,
    .image-upload-wrap:hover {
        background-color: white;
        border: 4px dashed #de7074;
    }

    .image-title-wrap {
        padding: 0 15px 15px 15px;
        color: #222;
    }

    .drag-text {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 100;
        text-transform: uppercase;
        color: #e71c24;
        padding: 60px 0;
    }

    .file-upload-image {
        max-height: 200px;
        max-width: 200px;
        margin: auto;
        padding: 20px;
    }

    .remove-image {
        width: 200px;
        margin: 0;
        color: #fff;
        background: #cd4535;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #b02818;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .remove-image:hover {
        background: #c13b2a;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .remove-image:active {
        border: 0;
        transition: all .2s ease;
    }

    input[type="number"] {
        width: 20%;
    }

    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield;
    }


    .quantity-block {
        margin: auto;
        font-size: 20px;
    }

    .quantity-arrow-minus,
    .quantity-arrow-plus {
        cursor: pointer;
        font-size: 20px;
        padding: 5px 8px;
        width: 40px;
        box-sizing: border-box;
        border: 0px;
        border-radius: 4px;
        outline: none;
    }

    .quantity-arrow-minus:hover,
    .quantity-arrow-plus:hover {
        background: #e71c24;
        color: #fff;
    }

    .quantity-num {
        font-size: 20px;
        padding: 5px 10px;
        border: 0px;
        border-radius: 4px;
        outline: none;
    }

    .checkbox-form {
        background: #FFEBEE;
        color: #D32F2F;
        margin-top: 10px;
        cursor: pointer;
        border-radius: 1px;
        text-align: left;
    }

    .add-list {
        height: 45px;
        line-height: 27px;
        background-color: #D32F2F;
        color: #fff !important
    }
    </style>

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

        <section class="inner-page">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-11 col-sm-9 col-md-10 
                col-lg-10 col-xl-10 text-center p-0 mb-2">
                        <div class="px-0 pt-4 pb-0 mb-3">
                            <form id="form">
                                <ul id="progressbar" class="mx-auto">
                                    <li class="active" id="step1">
                                        <strong>Step 1</strong>
                                    </li>
                                    <li id="step2"><strong>Step 2</strong></li>
                                    <li id="step3"><strong>Step 3</strong></li>
                                    <li id="step4"><strong>Finished</strong></li>
                                </ul>
                                <div class="progress">
                                    <div class="progress-bar"></div>
                                </div> <br>
                                <fieldset>
                                    <h2>Let's get started</h2>
                                    <div class="inputs">
                                        <div class="form-group">
                                            <label for="">Upload You're Home plan</label>
                                            <div class="file-upload">
                                                <button class="file-upload-btn" type="button"
                                                    onclick="$('.file-upload-input').trigger( 'click' )">Add
                                                    Image</button>
                                                <span id="imageError" class="text-danger"></span>
                                                <div class="image-upload-wrap">
                                                    <input class="file-upload-input" name="homeplan" id="homeplan"
                                                        type='file' onchange="readURL(this);" accept="image/*" />
                                                    <div class="drag-text">
                                                        <h3>Drag and drop a file or select add Image</h3>
                                                    </div>
                                                </div>
                                                <div class="file-upload-content">
                                                    <img class="file-upload-image" src="#" alt="your image" />
                                                    <div class="image-title-wrap">
                                                        <button type="button" onclick="removeUpload()"
                                                            class="remove-image">Remove Image</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="next-step" class="next-step mx-auto" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <h2>Tell Us What You Need?</h2>
                                    <div class="inputs">
                                        <div class="row">
                                            <div class="col-6">
                                                <h6>Rooms</h6>
                                                <div class="form-group row pt-4 pb-4">
                                                    <label for="" class="text-left col-6">False Ceiling</label>
                                                    <div class="quantity-block">
                                                        <button type="button" class="quantity-arrow-minus"> - </button>
                                                        <input class="quantity-num quantity-num-1" type="number"
                                                            value="0" readonly />
                                                        <button type="button" class="quantity-arrow-plus"> + </button>
                                                    </div>
                                                </div>
                                                <div class="form-group row pt-4 pb-4">
                                                    <label for="" class="text-left col-6">Electric Room</label>
                                                    <div class="quantity-block">
                                                        <button type="button" class="quantity-arrow-minus"> - </button>
                                                        <input class="quantity-num" type="number" value="0" readonly />
                                                        <button type="button" class="quantity-arrow-plus"> + </button>
                                                    </div>
                                                </div>
                                                <div class="form-group row pt-4 pb-4">
                                                    <label for="" class="text-left col-6">Modular Kitchen</label>
                                                    <div class="quantity-block">
                                                        <button type="button" class="quantity-arrow-minus"> - </button>
                                                        <input class="quantity-num" type="number" value="0" readonly />
                                                        <button type="button" class="quantity-arrow-plus"> + </button>
                                                    </div>
                                                </div>
                                                <div class="form-group row pt-4 pb-4">
                                                    <label for="" class="text-left col-6">Wall Panneling</label>
                                                    <div class="quantity-block">
                                                        <button type="button" class="quantity-arrow-minus"> - </button>
                                                        <input class="quantity-num" type="number" value="0" readonly />
                                                        <button type="button" class="quantity-arrow-plus"> + </button>
                                                    </div>
                                                </div>
                                                <div class="form-group row pt-4 pb-4">
                                                    <label for="" class="text-left col-6">Wall Paper</label>
                                                    <div class="quantity-block">
                                                        <button type="button" class="quantity-arrow-minus"> - </button>
                                                        <input class="quantity-num" type="number" value="0" readonly />
                                                        <button type="button" class="quantity-arrow-plus"> + </button>
                                                    </div>
                                                </div>
                                                <div class="form-group row pt-4 pb-4">
                                                    <label for="" class="text-left col-6">Wall Paint</label>
                                                    <div class="quantity-block">
                                                        <button type="button" class="quantity-arrow-minus"> - </button>
                                                        <input class="quantity-num" type="number" value="0" readonly />
                                                        <button type="button" class="quantity-arrow-plus"> + </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h6>Furnitures</h6>
                                                <div class="p-2 rounded checkbox-form">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="flexCheckDefault-1"> <label
                                                            class=" newsletter form-check-label"
                                                            for="flexCheckDefault-1"> Wardrobe </label> </div>
                                                </div>
                                                <div class="p-2 rounded checkbox-form">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="flexCheckDefault-2"> <label
                                                            class=" prospect form-check-label" for="flexCheckDefault-2">
                                                            Bed </label> </div>
                                                </div>
                                                <div class="p-2 rounded checkbox-form">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="flexCheckDefault-3"> <label
                                                            class=" event form-check-label" for="flexCheckDefault-3">
                                                            Study Unit </label> </div>
                                                </div>
                                                <div class="p-2 rounded checkbox-form">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="flexCheckDefault-4"> <label
                                                            class=" customers form-check-label"
                                                            for="flexCheckDefault-4"> Dressing Unit </label> </div>
                                                </div>
                                                <div class="p-2 rounded checkbox-form">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="flexCheckDefault-4"> <label
                                                            class=" customers form-check-label"
                                                            for="flexCheckDefault-4"> Side table </label> </div>
                                                </div>
                                                <div class="p-2 rounded checkbox-form">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="flexCheckDefault-4"> <label
                                                            class=" customers form-check-label"
                                                            for="flexCheckDefault-4"> Sofa </label> </div>
                                                </div>
                                                <div class="p-2 rounded checkbox-form">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="flexCheckDefault-4"> <label
                                                            class=" customers form-check-label"
                                                            for="flexCheckDefault-4"> Dining Table </label> </div>
                                                </div>
                                                <div class="p-2 rounded checkbox-form">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="flexCheckDefault-4"> <label
                                                            class=" customers form-check-label"
                                                            for="flexCheckDefault-4"> Chair </label> </div>
                                                </div>
                                                <div class="p-2 rounded checkbox-form">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="flexCheckDefault-4"> <label
                                                            class=" customers form-check-label"
                                                            for="flexCheckDefault-4"> Customers </label> </div>
                                                </div>
                                                <div class="p-2 rounded checkbox-form">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="flexCheckDefault-4"> <label
                                                            class=" customers form-check-label"
                                                            for="flexCheckDefault-4"> Center table </label> </div>
                                                </div>
                                                <div class="p-2 rounded checkbox-form">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="flexCheckDefault-4"> <label
                                                            class=" customers form-check-label"
                                                            for="flexCheckDefault-4"> TV Unit </label> </div>
                                                </div>
                                                <div class="p-2 rounded checkbox-form">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="flexCheckDefault-4"> <label
                                                            class=" customers form-check-label"
                                                            for="flexCheckDefault-4"> Crockery Unit </label> </div>
                                                </div>
                                                <div class="p-2 rounded checkbox-form">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="flexCheckDefault-4"> <label
                                                            class=" customers form-check-label"
                                                            for="flexCheckDefault-4"> Bar Unit </label> </div>
                                                </div>
                                                <div class="p-2 rounded checkbox-form">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="flexCheckDefault-4"> <label
                                                            class=" customers form-check-label"
                                                            for="flexCheckDefault-4"> Shoe Unit </label> </div>
                                                </div>
                                                <div class="p-2 rounded checkbox-form">
                                                    <div class="form-check"> <input class="form-check-input"
                                                            type="checkbox" value="" id="flexCheckDefault-4"> <label
                                                            class=" customers form-check-label"
                                                            for="flexCheckDefault-4"> Basin Unit / Mirror </label>
                                                    </div>
                                                </div>
                                                <div class="p-2 rounded checkbox-form add-list align-items-center">
                                                    <div class="text-white"> <i class="icofont-plus"></i> <span
                                                            class=" ml-2">Create your own furniture</span> </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="button" name="previous-step" class="previous-step" value="Go Back" />
                                    <input type="button" name="next-step" class="next-step" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <h2>Sign up to view</h2>
                                    <div class="inputs">

                                    </div>
                                    <input type="button" name="previous-step" class="previous-step" value="Go Back" />
                                    <input type="button" name="next-step" class="next-step" value="Submit" />
                                </fieldset>
                                <fieldset>
                                    <div class="finish">
                                        <h2 class="text text-center">
                                            <strong>FINISHED</strong>
                                        </h2>
                                    </div>
                                    <!-- <input type="button" name="previous-step" 
                                class="previous-step" 
                                value="Previous Step" /> -->
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
        </section>

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