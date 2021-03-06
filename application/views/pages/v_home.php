<!-- carousel  -->
<section class="home-slid">
    <div id="carouselExampleFade" class="carousel slide carousel-fade " data-ride="carousel">
        <div class="carousel-inner d-flex align-items-center">            
            <?php for($i = 0;$i < count($gallery_images);$i++):?>
            <div class="carousel-item <?= $i == 1? 'active':'' ?>">
                <img src='<?= base_url('public/images/gallery/'.$gallery_images[$i])?>' class="d-block w-100" alt="...">
            </div>
            <?php endfor;?>
            <div class="home-text d-flex justify-content-end">
                <div class="box p-4 text-center">
                    <h3 class="slide-text"><?= lang('slide_text')?></h3>
                    <a href="#" class="btn btn-outline-light slide-btn"><?= lang('slide_btn')?> <i class="fa fa-cloud-download"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end for carousel -->
<!-- news -->
<section class="news bg-white py-4">
    <div class="container-fluid">
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
            <div class="col-md-8">
                <div class="row">
                    <div class="col-lg-7 card-news hide-ele">
                        <div class="card my-5 border-main rounded-0">
                            <img src="<?= base_url("uploads/press-news/$last_news_head->image")?>" class="d-flex card-img-top mr-3 img-latest img-shadow rounded-0"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?= $last_news_head->title?>
                                </h5>
                                <p class="card-text text-muted">
                                    <?= $newsCoverContent->content?>
                                </p>
                                <a href="<?= base_url("home/newsDetails/$last_news_head->news_id");?>" class="btn btn-outline-main">
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
                                    <a href="<?= base_url(" home/newsDetails/$news->news_id");?>"> <div class="media my-3">
                                        <img src='<?=base_url("/uploads/press-news/$news->image")?>' class="border-main img-slide"
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
            <div class="col-md-4">
                <div class="row">
                    <div class="col-12  card-news hide-ele">
                        <div class="card my-5  img-shadow border-0 news-link">
                            <a href="wtt.abuqir.net">
                                <img src="<?= base_url('public/images/wtt.jpg')?>" class="card-img-bottom" alt="...">
                                <div class="card-body">
                                    <p class="card-text font-weight-bold"><?= lang('wtt_p')?></p>
                                </div>
                            </a>
                        </div>
                    </div>
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
                    <a href="<?= base_url('home/chairmanWord')?>" class="btn btn-outline-light">
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
                        <?php
                            $i = 1;
                            foreach ($products_specs as $products):                                
                            if ($i % 4 == 1):
                               
                            ?>
                        <div class="carousel-item  <?= $i == 1? 'active':'' ?>">
                            <div class="row text-center">
                                <?php endif;?>
                                <div class="col-12 col-md-6 col-lg-3 mb-3">
                                    <div class="product-box porduct-bg border-dark">
                                        <img src="<?php echo base_url('public/images/products/'.$products['product']->product_id.'.jpg')?>"
                                            class="img-thumbnail img-shadow" alt="">
                                        <div class="product-box-overlay">
                                            <div class="display-table">
                                                <div class="display-tablecell">
                                                    <h5>
                                                        <?= $products['product']->product_name?>
                                                    </h5>
                                                    <h5 class="mt-3">
                                                        <?= lang('specs')?>
                                                    </h5>
                                                    <?php
                                                    foreach($products['spec']  as $spec):
                                                    ?>
                                                    <p><small><i class="fa <?= $this->session->site_lang === 'ar'? 'fa-angle-double-left':'fa-angle-double-right'?>"
                                                                aria-hidden="true"></i>
                                                            <?= $spec->spec_name?></small></p>
                                                    <?php endforeach;?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if (($i / 4) * ($i % 4) == 0): ?>
                            </div>
                            <!--.row-->
                        </div>
                        <?php endif;?>
                        <?php 
                        
                                $i++;
                            endforeach;?>
                        <!--.item-->
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
<!-- social responsibilty -->
<section class="repons bg-white py-4">
    <div class="container">
        <!-- title -->
        <div class="row">
            <div class="col m-4  text-center">
                <div class="sec-title mb-20">
                    <h2 class="text-muted">
                        <?= lang('social_title')?><span class="title-span text-main-color">
                            <?= lang('social_span')?></span>
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
        <div class="row py-3 ">
            <div class="col-lg-6 my-3 repons-text <?= lang('social_order_txt')?> hide-ele">
                <h5>
                    <?= lang('social_p')?>
                </h5>
                <div class="mt-lg-5"><a href="<?= base_url('socialresponsibiltiy')?>" class="text-white btn btn-main">
                        <?= lang('social_btn')?></a></div>

            </div>
            <div class="col-lg-6 my-3 repons-img <?= lang('social_order_img')?>  hide-ele">
                <img class="w-100 img-shadow" src="<?= base_url()?>public/images/Social-Responsibility.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- end for social responsibilty -->
<!-- safty -->
<section class="safty-home py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 safty-img <?= lang('safty_order_img')?> hide-ele">
                <img class="w-100 img-shadow" src="<?= base_url()?>public/images/Safety-equipment.jpg" alt="">
            </div>
            <div class="col-12 col-lg-6 safty-txt <?= lang('safty_order_txt')?>  hide-ele">
                <h3 class="mb-md-4 my-4 my-md-0">
                    <?= lang('safty_head')?>
                </h3>
                <p class="lead">
                    <?= lang('safty_p')?>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- end of safty -->