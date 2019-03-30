

<section class="plants py-5 mt-md-5">
    <div class="container bg-white">        
        <div class="row d-none d-md-block d-lg-block">
            <!--Carousel-->
            <?php if ($images) : ?>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php for ($i = 0; $i < count($images); $i++): ?>
                            <div class="carousel-item  <?= $i === 0 ? 'active' : '' ?>">
                                <img src='<?= base_url("/public/images/plants/$images[$i]") ?>' class="d-block " width= "1400px" alt="...">
                            </div>
                        <?php endfor; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <!-- Start Plant abuqir 1-->
                <div class="card  border-0 py-3 <?= lang('text_dir') ?>">
                    <div class="card-header bg-transparent">
                        <h4><?= lang('afc1_head')?></h4> <!-- plant name -->
                    </div>
                    <!-- -->
                    <div class="card-body">
                        <h5 class="card-title bg-main py-3 px-2 text-white"><?= lang('afc1_title1')?></h5>
                        
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc1_p1_1')?></p>
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc1_p1_2')?></p>
                        
                    </div>
                    
                    <div class="card-body">
                        <h5 class="card-title bg-main py-3 px-2 text-white"><?= lang('afc1_title2')?></h5>
                        
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc1_p2_1')?></p>
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc1_p2_2')?></p>
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc1_p2_3')?></p>
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc1_p2_4')?></p>
                    </div>
                </div>
                <!--End Planet abuqir 1-->
            </div>    
            <div class="col-12 col-md-6 order-first">
                <!-- Start Plant abuqir 2-->
                <div class="card border-0 py-3 <?= lang('text_dir') ?>">
                    <div class="card-header bg-transparent">
                        <h4><?= lang('afc2_head')?></h4> <!-- plant name -->
                    </div>
                    <!-- -->
                    <div class="card-body">
                        <h5 class="card-title bg-main py-3 px-2 text-white"><?= lang('afc2_title1')?></h5>
                        
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc2_p1_1')?></p>
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc2_p1_2')?></p>
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc2_p1_3')?></p>
                        
                    </div>
                    
                    <div class="card-body">
                        <h5 class="card-title bg-main py-3 px-2 text-white"><?= lang('afc2_title2')?></h5>
                        
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc2_p2_1')?></p>
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc2_p2_2')?></p>
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc2_p2_3')?></p>
                    </div>
                </div>
                <!--End Planet abuqir 2-->
            </div>    
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <!-- Start Plant abuqir 3-->
                <div class="card  border-0 py-3 <?= lang('text_dir') ?>">
                    <div class="card-header bg-transparent">
                        <h4><?= lang('afc3_head')?></h4> <!-- plant name -->
                    </div>
                    <!-- -->
                    <div class="card-body">
                        <h5 class="card-title bg-main py-3 px-2 text-white"><?= lang('afc3_title1')?></h5>
                        
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc3_p1_1')?></p>
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc3_p1_2')?></p>
                        
                    </div>
                    
                    <div class="card-body">
                        <h5 class="card-title bg-main py-3 px-2 text-white"><?= lang('afc3_title2')?></h5>
                        
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc3_p2_1')?></p>
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc3_p2_2')?></p>
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc3_p2_3')?></p>
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc3_p2_4')?></p>
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('afc3_p2_5')?></p>
                    </div>
                </div>
                <!--End Planet abuqir 3-->
            </div>    
            <div class="col-12 col-md-6 order-first">
                <!-- Start Plant NPK-->
                <div class="card border-0 py-3 <?= lang('text_dir') ?>">
                    <div class="card-header bg-transparent">
                        <h4><?= lang('NPK_head')?></h4> <!-- plant name -->
                    </div>
                    <!-- -->
                    <div class="card-body">
                        <h5 class="card-title bg-main py-3 px-2 text-white"><?= lang('NPK_title1')?></h5>
                        
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('NPK_p1_1')?></p>
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('NPK_p1_2')?></p>
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('NPK_p1_3')?></p>
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('NPK_p1_4')?></p>
                        
                    </div>
                </div>
                <!--End Planet NPK-->
            </div>    
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Start Plant UAN-->
                <div class="card border-0 py-3 <?= lang('text_dir') ?>">
                    <div class="card-header bg-transparent">
                        <h4><?= lang('UAN_head')?></h4> <!-- plant name -->
                    </div>
                    <!-- -->
                    <div class="card-body">
                        <h5 class="card-title bg-main py-3 px-2 text-white"><?= lang('UAN_title1')?></h5>
                        
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('UAN_p1_1')?></p>
                        <p class="card-text px-2"><i class="fa fa-arrow-circle-<?= lang('icon_dir')?> fa-1x text-main-color"></i><?= lang('UAN_p1_2')?></p>
                        
                    </div>
                </div>
                <!--End Planet UAN-->
            </div>
        </div>
    </div>
</section>