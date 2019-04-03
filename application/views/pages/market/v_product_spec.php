<div class="breadcrumb"></div>
<section class="prod-spec py-5">
    <div class="container">
            <div class="card mb-3 rounded-0 img-shadow border-0">
                <div class="row">
                    <div class="col-md-4 pr-md-0">
                        <img src="<?php echo base_url('public/images/products/'.$prod_head->product_id.'.jpg')?>" class="d-block w-100 card-img img-shadow rounded-0 border-0" alt="...">
                    </div>
                    <div class="col-md-8 pl-md-0">
                        <div class="card-header bg-main text-white rounded-0">
                            <h3><?= $prod_head->product_name?></h3>
                        </div>
                        <div class="card-body rounded-0 border-0">
                            <ul>
                                <h4 class="pb-2"><?= lang('spec_head')?></h4>
                                <?php foreach ($prod_spec as $spec) :?>
                                    <p class="card-text"><i class="fa fa-check-square-o"></i> <?= $spec->spec_name?></p>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>