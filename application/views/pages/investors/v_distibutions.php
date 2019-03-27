<div class="breadcrumb"></div>

<section class="contact py-5">
    <div class="container">
        <!-- title -->
        <div class="row mb-5">
            <div class="col m-4  text-center">
                <div class="sec-title mb-20">
                    <h2 class="text-muted">                    
                        <span class="title-span text-main-color"><?= lang('assemblies_title') ?> </span>
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

        <div class="row investor-table shareholders-table">
            <div class="col-md-12">
                <table class="table table-striped">
                    <tbody>
                        <?php
                        if ($public_associations) :
                            foreach ($public_associations as $assoc):
                                ?>

                                <tr>
                                    <td><?= $assoc->assoc_place ?></td>
                                    <td><?= DateTime::createFromFormat('Y-m-d', $assoc->assoc_date)->format('d/m/Y') ?></td>                            
                                </tr>

                                <?php
                            endforeach;
                        endif;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- title -->
        <div class="row mb-5">
            <div class="col m-4  text-center">
                <div class="sec-title mb-20">
                    <h2 class="text-muted">                    
                        <span class="title-span text-main-color"><?= lang('coupons_title') ?> </span>
                        <span class="sec-title-border">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </h2>
                </div>
            </div>
        </div>
        
        
        <div class="row investor-table ">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr class="warning">
                            <th><?= lang('coupon_value')?></th>
                            <th><?= lang('coupon_number')?></th>
                            <th><?= lang('coupon_date')?></th>
                                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($coupons) :
                            foreach ($coupons as $coupon):
                                ?>

                                <tr>
                                        <td><?= $coupon->coupon_value?></td>
                                        <td><?= $coupon->coupon_no?></td>
                                        <td><?= DateTime::createFromFormat('Y-m-d',$coupon->coupon_date)->format('d/m/Y')?></td>
                                    </tr>

                                <?php
                            endforeach;
                        endif;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        
         <!-- title -->
        <div class="row mb-5">
            <div class="col m-4  text-center">
                <div class="sec-title mb-20">
                    <h2 class="text-muted">                    
                        <span class="title-span text-main-color"><?= lang('free_title') ?> </span>
                        <span class="sec-title-border">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </h2>
                </div>
            </div>
        </div>
        
         
        <div class="row investor-table shareholders-table ">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr class="warning">
                            <th><?= lang('destributions_free')?></th>
                            <th><?= lang('destributions_date')?></th>
                            
                                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($free_coupons) :
                            foreach ($free_coupons as $free_coupon):
                                ?>

                                <tr>
                                        <td><?= $free_coupon->free_info?></td>
                                        <td><?= DateTime::createFromFormat('Y-m-d', $free_coupon->free_date)->format('d/m/Y')?></td>
                                        
                                    </tr>

                                <?php
                            endforeach;
                        endif;
                        ?>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
</section>
