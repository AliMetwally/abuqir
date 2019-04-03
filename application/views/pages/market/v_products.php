<div class="breadcrumb"></div>

<section class="products-market py-3">
    <div class="container">
        <!-- title -->
        <div class="row mb-3">
            <div class="col m-4  text-center">
                <div class="sec-title mb-20">
                    <h2 class="text-muted">
                        <span class="title-span text-main-color rounded-0">
                            <?= lang('products_title') ?> </span>
                        <span class="sec-title-border">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- end of title -->
    <div class="container">
        <div class="row py-2">
            <div class="col-12">
                <div class="card img-shadow border-0 mb-3 rounded-0">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card-header">
                                <h4 class="card-title"><?= lang('nitro_head')?></h4>
                            </div>
                            <div class="card-body text-main-color">
                                <p class="card-text">
                                    <?= lang('nitro_p')?>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card-header">
                                <h4 class="card-title"><?= lang('urea_head')?></h4>
                            </div>
                            <div class="card-body text-main-color">
                                <p class="card-text">
                                    <?= lang('urea_p')?>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card-header">
                                <h4 class="card-title"><?= lang('an_head')?></h4>
                            </div>
                            <div class="card-body text-main-color">
                                </h4>
                                <p class="card-text">
                                    <?= lang('an_p')?>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card-header">
                                <h4 class="card-title"><?= lang('zn_head')?></h4>
                            </div>
                            <div class="card-body text-main-color">
                                <p class="card-text">
                                    <?= lang('zn_p')?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card-header">
                                <h4 class="card-title"><?= lang('sul_head')?></h4>
                            </div>
                            <div class="card-body text-main-color">
                                <p class="card-text">
                                    <?= lang('sul_p')?>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card-header">
                                <h4 class="card-title"><?= lang('mg_head')?></h4>
                            </div>
                            <div class="card-body text-main-color">
                                <p class="card-text">
                                    <?= lang('mg_p')?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-around">
            <?php foreach ($products as $pro):  ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="project-box">
                            <div class="project-text d-flex justify-content-around">
                                <div class="col-3 col-sm-4">
                                    <img class="prod-img img-shadow d-block w-100"  src="<?php echo base_url('public/images/products/'.$pro->product_id.'.jpg')?>">
                                </div>
                                <div class="col-9 col-sm-8">
                                    <p class="font-weight-bold pb-md-3 pb-0"><?= $pro->product_name?></p>
                                    <a href="<?= base_url('market/getProductSpec/').$pro->category_id.'/'.$pro->product_id?>" class="btn btn-outline-main"><?= lang('prod_btn')?></a>
                                </div>
                            </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>