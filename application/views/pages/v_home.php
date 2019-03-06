<!-- news -->
<section class="bg-white py-4">
    <div class="container">
        <!-- title -->
        <div class="row">
            <div class="col m-4  text-center">
                <div class="sec-title mb-20">
                    <h2 class="text-muted">
                        <?= lang('title_span')?> <span class="title-span text-main-color">
                            <?= lang('news_title')?></span>
                        <span class="sec-title-border">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </h2>
                </div>
            </div>
        </div>
        <!-- end of title -->
        <!--Controls-->


        <div class="row py-3">
            <div class="col-lg-7 card-news hide-ele">
                <div class="card my-5 border-main">
                    <img src="<?= base_url("uploads/press-news/$last_news_head->image")?>" class="d-flex card-img-top mr-3 img-latest"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $last_news_head->title?>
                        </h5>
                        <p class="card-text text-muted">
                            <?= $newsCoverContent->content?>
                        </p>
                        <a href="#" class="btn btn-outline-main">
                            <?= lang('btn_read_more')?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 my-5 slide-news hide-ele" style="top: -54px;">
                <div class="text-right">
                    <a class="btn btn-main text-light" href="#carouselExampleControls" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="btn btn-main text-light" href="#carouselExampleControls" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <?php
                            $i = 1;
                            foreach ($topNews as $news):                                
                            if ($i % 3 == 1):
                            ?>
                        <div class="carousel-item <?= $i == 1? 'active':'' ?> news-link">
                            <?php endif;?>
                            <a href="#">
                                <div class="media my-3">
                                    <img src='<?= base_url("uploads/press-news/$news->image")?>' class="border-main img-slide"
                                        alt="...">
                                    <div class="media-body">
                                        <p class="mt-0 font-weight-bold">
                                            <?= $news->title?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <?php if (($i / 3) * ($i % 3) == 0): ?>
                        </div> <!-- end of slice -->
                        <?php endif;?>

                        <?php 
                        
                                $i++;
                            endforeach;?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of news -->

<!-- chairman word -->
<section class="chairman px-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 text-white text-center chairman-text mb-3 hide-ele">
                <h1>
                    <?= lang('chairman_title')?>
                </h1>
                <div class="chairman-content-box ">
                    <p class="lead">
                        <?= lang('chairman_text')?>
                    </p>
                    <a href="" class="btn btn-outline-light">
                        <?= lang('btn_read_more')?></a>
                </div>

            </div>
            <div class="col-lg-5 text-center order-lg-first">
                <img src="<?= base_url()?>public/images/chairman1.png" class="chairman-img hide-ele">
            </div>
        </div>
    </div>
</section>
<!-- end of chairman word -->

<!-- products -->

<section class="products m-4 text-center">
    <div class="container">
        <!-- title -->
        <div class="row">
            <div class="col m-4  text-center">
                <div class="sec-title mb-20">
                    <h2 class="text-muted">
                        <?= lang('title_span')?> <span class="title-span text-main-color">
                            <?= lang('products_title')?></span>
                        <span class="sec-title-border">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </h2>
                </div>
            </div>
        </div>
        <!-- end of title -->
        <div class="">
            <div class="col-md-12">
                <div id="ProductCarousel" class="carousel slide" data-ride="carousel">


                    <div class="text-right mb-3">
                        <a class="btn btn-main text-light" href="#ProductCarousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                        <a class="btn btn-main text-light" href="#ProductCarousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                    </div>

                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row text-center">
                                <div class="col-12 col-md-6 col-lg-3 mb-3">
                                    <div class="product-box porduct-bg border-dark">
                                        <img src="<?php echo base_url()?>public/images/products/1.jpg" class="img-thumbnail" alt="">
                                        <div class="product-box-overlay">
                                            <div class="display-table">
                                                <div class="display-tablecell">
                                                    <h4>Product Name</h4>
                                                    <h5>Specifications</h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis ducimus incidunt sapiente dicta. Numquam ratione porro odio sunt veniam repellendus.</p>
                                                    <a href="#" class="btn btn-outline-light theme-btn6">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3 mb-3">
                                    <div class="product-box porduct-bg border-dark">
                                        <img src="<?php echo base_url()?>public/images/products/1.jpg" class="img-thumbnail" alt="">
                                        <div class="product-box-overlay">
                                            <div class="display-table">
                                                <div class="display-tablecell">
                                                    <h4>Product Name</h4>
                                                    <h5>Specifications</h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis ducimus incidunt sapiente dicta. Numquam ratione porro odio sunt veniam repellendus.</p>
                                                    <a href="#" class="btn btn-outline-light theme-btn6">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3 mb-3">
                                    <div class="product-box porduct-bg border-dark">
                                        <img src="<?php echo base_url()?>public/images/products/1.jpg" class="img-thumbnail" alt="">
                                        <div class="product-box-overlay">
                                            <div class="display-table">
                                                <div class="display-tablecell">
                                                    <h4>Product Name</h4>
                                                    <h5>Specifications</h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis ducimus incidunt sapiente dicta. Numquam ratione porro odio sunt veniam repellendus.</p>
                                                    <a href="#" class="btn btn-outline-light theme-btn6">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3 mb-3">
                                    <div class="product-box porduct-bg border-dark">
                                        <img src="<?php echo base_url()?>public/images/products/1.jpg" class="img-thumbnail" alt="">
                                        <div class="product-box-overlay">
                                            <div class="display-table">
                                                <div class="display-tablecell">
                                                    <h4>Product Name</h4>
                                                    <h5>Specifications</h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis ducimus incidunt sapiente dicta. Numquam ratione porro odio sunt veniam repellendus.</p>
                                                    <a href="#" class="btn btn-outline-light theme-btn6">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-3 mb-3">
                                    <div class="product-box porduct-bg border-dark">
                                        <img src="<?php echo base_url()?>public/images/products/1.jpg" class="img-thumbnail" alt="">
                                        <div class="product-box-overlay">
                                            <div class="display-table">
                                                <div class="display-tablecell">
                                                    <h4>Product Name</h4>
                                                    <h5>Specifications</h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis ducimus incidunt sapiente dicta. Numquam ratione porro odio sunt veniam repellendus.</p>
                                                    <a href="#" class="btn btn-outline-light theme-btn6">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3 mb-3">
                                    <div class="product-box porduct-bg border-dark">
                                        <img src="<?php echo base_url()?>public/images/products/1.jpg" class="img-thumbnail" alt="">
                                        <div class="product-box-overlay">
                                            <div class="display-table">
                                                <div class="display-tablecell">
                                                    <h4>Product Name</h4>
                                                    <h5>Specifications</h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis ducimus incidunt sapiente dicta. Numquam ratione porro odio sunt veniam repellendus.</p>
                                                    <a href="#" class="btn btn-outline-light theme-btn6">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3 mb-3">
                                    <div class="product-box porduct-bg border-dark">
                                        <img src="<?php echo base_url()?>public/images/products/1.jpg" class="img-thumbnail" alt="">
                                        <div class="product-box-overlay">
                                            <div class="display-table">
                                                <div class="display-tablecell">
                                                    <h4>Product Name</h4>
                                                    <h5>Specifications</h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis ducimus incidunt sapiente dicta. Numquam ratione porro odio sunt veniam repellendus.</p>
                                                    <a href="#" class="btn btn-outline-light theme-btn6">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3 mb-3">
                                    <div class="product-box porduct-bg border-dark">
                                        <img src="<?php echo base_url()?>public/images/products/1.jpg" class="img-thumbnail" alt="">
                                        <div class="product-box-overlay">
                                            <div class="display-table">
                                                <div class="display-tablecell">
                                                    <h4>Product Name</h4>
                                                    <h5>Specifications</h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis ducimus incidunt sapiente dicta. Numquam ratione porro odio sunt veniam repellendus.</p>
                                                    <a href="#" class="btn btn-outline-light theme-btn6">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->
                    </div>
                    <!--.carousel-inner-->
                </div>
                <!--.Carousel-->

            </div>
        </div>
    </div>
</section>

<!-- end of products -->