<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container-fluid">


        <div class="section-title">
            <span>Feather Interior Designs</span>
            <h2>Feather Interior Designs</h2>
            <p>Find design ideas from our design gallery or book a meeting with dedicated design expert</p>
        </div>
        <div class="container-fluid pr-2 pl-2 mb-3">
            <br>
            <h5 class="text-dark">Trending Designs
                <!-- <i class="icofont-chart-line"></i> -->
            </h5>
            <br>
            <div class="owl-carousel owl-theme">
                <?php shuffle($gallery);
                 foreach($gallery as $x): ?>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <a
                            href="<?php echo site_url('User/ImageGallery/'); if($x['parent_category_id'] != ''){echo $x['parent_category_id'].'/'.$x['category_id'].'/'.$x['image_id'];}else{echo $x['category_id'].'/'.$x['image_id'];} ?>"><img
                                src="<?php echo base_url().$x['image_file_name'] ?>" alt="" class="card-img-top"></a>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/kitchen2.jpg" alt=""
                            class="card-img-top">
                    </div>

                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/wardrobe3.jpg" alt=""
                            class="card-img-top">
                    </div>

                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/home5.jpeg" alt="" class="card-img-top">
                    </div>

                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/kitchen5.jpg" alt=""
                            class="card-img-top">
                    </div>

                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/home2.jpeg" alt="" class="card-img-top">
                    </div>

                </div> -->
            </div>
        </div>
        <div class="container-fluid pr-2 pl-2 mb-3">
            <br>
            <h5 class="text-dark">Home Office
                <!-- <i class="icofont-chart-line"></i> -->
            </h5>
            <br>
            <div class="owl-carousel owl-theme">
                <?php foreach($gallery as $x): ?>
                <?php if($x['category_name'] == 'Home Office'): ?>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <a
                            href="<?php echo site_url('User/ImageGallery/'); if($x['parent_category_id'] != ''){echo $x['parent_category_id'].'/'.$x['category_id'].'/'.$x['image_id'];}else{echo $x['category_id'].'/'.$x['image_id'];} ?>"><img
                                src="<?php echo base_url().$x['image_file_name'] ?>" alt="" class="card-img-top"></a>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
                <!-- <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/home1.jpeg" alt="" class="card-img-top">
                    </div>
                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/home2.jpeg" alt="" class="card-img-top">
                    </div>

                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/home3.jpeg" alt="" class="card-img-top">
                    </div>

                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/home4.jpeg" alt="" class="card-img-top">
                    </div>

                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/home5.jpeg" alt="" class="card-img-top">
                    </div>

                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/home6.jpeg" alt="" class="card-img-top">
                    </div>

                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/home7.jpeg" alt="" class="card-img-top">
                    </div>

                </div> -->
            </div>
        </div>
        <div class="container-fluid pr-2 pl-2 mt-2 mb-3">
            <br>
            <h5 class="text-dark">Wardrobe Designs </h5>
            <br>
            <div class="owl-carousel owl-theme">
                <?php foreach($gallery as $x): ?>
                <?php if($x['category_name'] == 'Wardrobe Design'): ?>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <a
                            href="<?php echo site_url('User/ImageGallery/'); if($x['parent_category_id'] != ''){echo $x['parent_category_id'].'/'.$x['category_id'].'/'.$x['image_id'];}else{echo $x['category_id'].'/'.$x['image_id'];} ?>"><img
                                src="<?php echo base_url().$x['image_file_name'] ?>" alt="" class="card-img-top"></a>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
                <!-- <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/wardrobe1.jpg" alt=""
                            class="card-img-top">
                    </div>
                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/wardrobe2.jpg" alt=""
                            class="card-img-top">
                    </div>

                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/wardrobe3.jpg" alt=""
                            class="card-img-top">
                    </div>

                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/wardrobe4.jpg" alt=""
                            class="card-img-top">
                    </div>

                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/wardrobe5.jpg" alt=""
                            class="card-img-top">
                    </div>

                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/wardrobe6.jpg" alt=""
                            class="card-img-top">
                    </div>

                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/wardrobe7.jpg" alt=""
                            class="card-img-top">
                    </div>

                </div> -->
            </div>
        </div>
        <div class="container-fluid pr-2 pl-2 mt-2 mb-3">
            <br>
            <h5 class="text-dark">Modular Kitchen </h5>
            <br>
            <div class="owl-carousel owl-theme">
                <?php foreach($gallery as $x): ?>
                <?php if($x['category_name'] == 'Modular Kitchen'): ?>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <a
                            href="<?php echo site_url('User/ImageGallery/'); if($x['parent_category_id'] != ''){echo $x['parent_category_id'].'/'.$x['category_id'].'/'.$x['image_id'];}else{echo $x['category_id'].'/'.$x['image_id'];} ?>"><img
                                src="<?php echo base_url().$x['image_file_name'] ?>" alt="" class="card-img-top"></a>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
                <!-- <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/kitchen1.jpg" alt=""
                            class="card-img-top">
                    </div>
                </div>

                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/kitchen2.jpg" alt=""
                            class="card-img-top">
                    </div>

                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/kitchen3.jpg" alt=""
                            class="card-img-top">
                    </div>

                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/kitchen4.jpg" alt=""
                            class="card-img-top">
                    </div>

                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/kitchen5.jpg" alt=""
                            class="card-img-top">
                    </div>

                </div>
                <div class="item">
                    <div class="card mr-2 ml-2">
                        <img src="<?php echo base_url() ?>UserAssets/img/design/kitchen6.jpg" alt=""
                            class="card-img-top">
                    </div>

                </div> -->
            </div>
        </div>


    </div>
</section><!-- End Portfolio Section -->
<!-- <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="<?php echo base_url() ?>UserAssets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>App</p>
                    <a href="<?php echo base_url() ?>UserAssets/img/portfolio/portfolio-1.jpg"
                        data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i
                            class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="<?php echo base_url() ?>UserAssets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <a href="<?php echo base_url() ?>UserAssets/img/portfolio/portfolio-2.jpg"
                        data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i
                            class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="<?php echo base_url() ?>UserAssets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>App 2</h4>
                    <p>App</p>
                    <a href="<?php echo base_url() ?>UserAssets/img/portfolio/portfolio-3.jpg"
                        data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i
                            class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="<?php echo base_url() ?>UserAssets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Card 2</h4>
                    <p>Card</p>
                    <a href="<?php echo base_url() ?>UserAssets/img/portfolio/portfolio-4.jpg"
                        data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i
                            class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="<?php echo base_url() ?>UserAssets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Web 2</h4>
                    <p>Web</p>
                    <a href="<?php echo base_url() ?>UserAssets/img/portfolio/portfolio-5.jpg"
                        data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i
                            class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="<?php echo base_url() ?>UserAssets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>App 3</h4>
                    <p>App</p>
                    <a href="<?php echo base_url() ?>UserAssets/img/portfolio/portfolio-6.jpg"
                        data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i
                            class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="<?php echo base_url() ?>UserAssets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Card 1</h4>
                    <p>Card</p>
                    <a href="<?php echo base_url() ?>UserAssets/img/portfolio/portfolio-7.jpg"
                        data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i
                            class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="<?php echo base_url() ?>UserAssets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Card 3</h4>
                    <p>Card</p>
                    <a href="<?php echo base_url() ?>UserAssets/img/portfolio/portfolio-8.jpg"
                        data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i
                            class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="<?php echo base_url() ?>UserAssets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <a href="<?php echo base_url() ?>UserAssets/img/portfolio/portfolio-9.jpg"
                        data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i
                            class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

        </div> -->