<!-- carousel  -->
<section class="home-slid">
    <div id="carouselExampleFade" class="carousel slide carousel-fade " data-ride="carousel">
        <div class="carousel-inner d-flex align-items-center">
            <?php for($i = 0;$i < count($gallery_images);$i++):?>
            <div class="carousel-item <?= $i == 1? 'active':'' ?>">
                <img src='<?= base_url('public/images/services/'.$gallery_images[$i])?>' class="d-block w-100" alt="...">
            </div>
            <?php endfor;?>
        </div>
    </div>
</section>
<section class="out-services">
    <div class="container">
        <!-- title -->
        <div class="row mb-3">
            <div class="col m-4  text-center">
                <div class="sec-title mb-20">
                    <h2 class="text-muted">
                        <span class="title-span text-main-color rounded-0">
                            <?= lang('services_title') ?> </span>
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
        <div class="row">
            <div class="col-12">                
                <div class="card bg-light mb-3">
                    <div class="card-header bg-main text-white">
                        <?= lang('success_head')?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= lang('success_title')?>
                        </h5>
                        <p class="card-text">
                            <?= lang('success_p1')?>
                        </p>
                        <p class="card-text">
                            <?= lang('success_p2')?>
                        </p>
                        <p class="card-text">
                            <?= lang('success_p3')?>
                        </p>
                        <p class="card-text">
                            <?= lang('success_p4')?>
                        </p>
                        <p class="card-text">
                            <?= lang('success_p5')?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- title -->
        <div class="row mb-3">
            <div class="col m-4  text-center">
                <div class="sec-title mb-20">
                    <h2 class="text-muted">
                        <span class="title-span text-main-color rounded-0">
                            <?= lang('mv_title') ?> </span>
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
        <div class="row">
            <div class="col-12">
                <div class="alert alert-light text-dark img-shadow" role="alert">
                    <h4 class="alert-heading">
                        <?= lang('m_title')?>
                    </h4>
                    <hr>
                    <p class="mb-0">
                        <?= lang('m_p')?>
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="alert alert-light text-dark img-shadow" role="alert">
                    <h4 class="alert-heading">
                        <?= lang('v_title')?>
                    </h4>
                    <hr>
                    <p class="mb-0">
                        <?= lang('v_p')?>
                    </p>
                </div>
            </div>
        </div>
        <!-- title -->
        <div class="row mb-3">
            <div class="col m-4  text-center">
                <div class="sec-title mb-20">
                    <h2 class="text-muted">
                        <span class="title-span text-main-color rounded-0">
                            <?= lang('s_title') ?> </span>
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
        <div class="row">
            <div class="accordion col-12" id="accordionExample">
                <div class="card">
                    <div class="card-header bg-main text-white" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapse1"
                                aria-expanded="true" aria-controls="collapseOne">
                                <?= lang('m_icon_en')?><?= lang('collapse1_head')?><?= lang('m_icon_ar')?>
                            </button>
                        </h2>
                    </div>

                    <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <h5>
                                <?= lang('collapse1_h')?>
                            </h5>
                            <ul>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse1_p1')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse1_p2')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse1_p3')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse1_p4')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse1_p5')?>
                                </p>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-main text-white" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse"
                                data-target="#collapse2" aria-expanded="false" aria-controls="collapseTwo">
                                <?= lang('icon_en')?><?= lang('collapse2_head')?><?= lang('icon_ar')?>
                            </button>
                        </h2>
                    </div>
                    <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>
                                <?= lang('collapse2_note')?>
                            </p>
                            <h5>
                                <?= lang('collapse2_h')?>
                            </h5>
                            <ul>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse2_p1')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse2_p2')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse2_p3')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse2_p4')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse2_p5')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse2_p6')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse2_p7')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse2_p8')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse2_p9')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse2_p10')?>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-main text-white" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse"
                                data-target="#collapse3" aria-expanded="false" aria-controls="collapseThree">
                                <?= lang('icon_en')?><?= lang('collapse3_head')?><?= lang('icon_ar')?>
                            </button>
                        </h2>
                    </div>
                    <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <h5>
                                <?= lang('collapse3_h')?>
                            </h5>
                            <ul>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse3_p1')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse3_p2')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse3_p3')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse3_p4')?>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-main text-white" id="heading4">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse"
                                data-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                                <?= lang('icon_en')?><?= lang('collapse4_head')?><?= lang('icon_ar')?>
                            </button>
                        </h2>
                    </div>
                    <div id="collapse4" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p><i class="fa fa-check-square-o"></i>
                                <?= lang('collapse4_p')?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-main text-white" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse"
                                data-target="#collapse5" aria-expanded="false" aria-controls="collapseThree">
                                <?= lang('icon_en')?><?= lang('collapse5_head')?><?= lang('icon_ar')?>
                            </button>
                        </h2>
                    </div>
                    <div id="collapse5" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <h5>
                                <?= lang('collapse5_h')?>
                            </h5>
                            <ul>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse5_p1')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse5_p2')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse5_p3')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse5_p4')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse5_p5')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse5_p6')?>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-main text-white" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse"
                                data-target="#collapse6" aria-expanded="false" aria-controls="collapseThree">
                                <?= lang('icon_en')?><?= lang('collapse6_head')?><?= lang('icon_ar')?>
                            </button>
                        </h2>
                    </div>
                    <div id="collapse6" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <h5>
                                <?= lang('collapse6_h')?>
                            </h5>
                            <ul>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse6_p1')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse6_p2')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse6_p3')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse6_p4')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse6_p5')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse6_p6')?>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-main text-white" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse"
                                data-target="#collapse7" aria-expanded="false" aria-controls="collapseThree">
                                <?= lang('icon_en')?><?= lang('collapse7_head')?><?= lang('icon_ar')?>
                            </button>
                        </h2>
                    </div>
                    <div id="collapse7" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <h5>
                                <?= lang('collapse7_h1')?>
                            </h5>
                            <p><i class="fa fa-check-square-o"></i>
                                <?= lang('collapse7_p1')?>
                            </p>
                            <h5>
                                <?= lang('collapse7_h2')?>
                            </h5>
                            <p><i class="fa fa-check-square-o"></i>
                                <?= lang('collapse7_p2')?>
                            </p>
                            <p><i class="fa fa-check-square-o"></i>
                                <?= lang('collapse7_p3')?>
                            </p>
                            <p><i class="fa fa-check-square-o"></i>
                                <?= lang('collapse7_p4')?>
                            </p>
                            <p><i class="fa fa-check-square-o"></i>
                                <?= lang('collapse7_p5')?>
                            </p>
                            <p><i class="fa fa-check-square-o"></i>
                                <?= lang('collapse7_p6')?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-main text-white" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse"
                                data-target="#collapse8" aria-expanded="false" aria-controls="collapseThree">
                                <?= lang('icon_en')?><?= lang('collapse7_head')?><?= lang('icon_ar')?>
                            </button>
                        </h2>
                    </div>
                    <div id="collapse8" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <h5>
                                <?= lang('collapse8_h')?>
                            </h5>
                            <ul>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse8_p1')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse8_p2')?>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-main text-white" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse"
                                data-target="#collapse9" aria-expanded="false" aria-controls="collapseThree">
                                <?= lang('icon_en')?><?= lang('collapse9_head')?><?= lang('icon_ar')?>
                            </button>
                        </h2>
                    </div>
                    <div id="collapse9" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <h5>
                                <?= lang('collapse9_h')?>
                            </h5>
                            <ul>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p1')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p2')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p3')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p4')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p5')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p6')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p7')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p8')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p9')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p10')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p11')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p12')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p13')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p14')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p15')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p16')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p17')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p18')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p19')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p20')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse9_p21')?>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-main text-white" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse"
                                data-target="#collapse10" aria-expanded="false" aria-controls="collapseThree">
                                <?= lang('icon_en')?><?= lang('collapse10_head')?><?= lang('icon_ar')?>
                            </button>
                        </h2>
                    </div>
                    <div id="collapse10" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <h5>
                                <?= lang('collapse10_h1')?>
                            </h5>
                            <ul>
                                <p class="font-weight-bold">
                                    <?= lang('collapse10_s_h1')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p1')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p2')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p3')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p4')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p5')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p6')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p7')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p8')?>
                                </p>
                            </ul>
                            <h5>
                                <?= lang('collapse10_h2')?>
                            </h5>
                            <ul>
                                <p class="font-weight-bold">
                                    <?= lang('collapse10_s_h2')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p9')?>
                                </p>
                            </ul>
                            <ul>
                                <p class="font-weight-bold">
                                    <?= lang('collapse10_s_h3')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p10')?>
                                </p>
                            </ul>
                            <h5>
                                <?= lang('collapse10_h1')?>
                            </h5>
                            <ul>
                                <p class="font-weight-bold">
                                    <?= lang('collapse10_s_h4')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p11')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p12')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p13')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p14')?>
                                </p>
                            </ul>
                            <ul>
                                <p class="font-weight-bold">
                                    <?= lang('collapse10_s_h5')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p15')?>
                                </p>
                            </ul>
                            <ul>
                                <p class="font-weight-bold">
                                    <?= lang('collapse10_s_h5')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p16')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p17')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p18')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p19')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p20')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p21')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p22')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p23')?>
                                </p>
                                <p><i class="fa fa-check-square-o"></i>
                                    <?= lang('collapse10_p24')?>
                                </p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- title -->
        <div class="row mb-3">
            <div class="col m-4  text-center">
                <div class="sec-title mb-20">
                    <h2 class="text-muted">
                        <span class="title-span text-main-color rounded-0">
                            <?= lang('contact_title') ?> </span>
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
        <div class="row">
            <div class="col-12 col-md-6">                
                <div class="card text-dark bg-white mb-3 border-main">
                    <div class="card-header bg-main border-main text-white">
                        <h4><?= lang('contact')?></h4>
                    </div>
                    <div class="card-body mb-1">
                        <ul class="list-group unstyled">
                            <p><i class="fa fa-phone px-3"></i> <?= lang('contact_phone')?></p>
                            <p><i class="fa fa-fax px-3"></i> <?= lang('contact_fax')?></p>
                            <p><i class="fa fa-envelope px-3"></i> <?= lang('contact_mail')?></p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card text-white bg-white mb-3 border-main">
                    <div class="card-header bg-main border-main">
                        <h4><?= lang('send_message')?></h4>
                    </div>
                    <div class="card-body text-dark">
                        <form class="needs-validation" novalidate="">
                            <div class="form-group">
                                <label for="txtname"><?= lang('txt_name')?></label>
                                <div class="input-group">
                                    <input dir="<?= lang('dir_form')?>" type="text" class="form-control" id="txtname" required="">
                                    <div class="invalid-feedback">
                                    <?= lang('valid_name')?> </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="txtcompany"><?= lang('txt_company')?></label>
                                <input dir="<?= lang('dir_form')?>" type="text" class="form-control" id="txtcompany">
                            </div>
                            <div class="form-group">
                                <label for="txtcountry"><?= lang('txt_country')?></label>
                                <input dir="<?= lang('dir_form')?>" type="text" class="form-control" id="txtcountry">
                            </div>
                            <div class="form-group">
                                <label for="txtTelephone"><?= lang('txt_phone')?></label>
                                <input dir="<?= lang('dir_form')?>" type="tel" class="form-control" id="txtTelephone">
                            </div>
                            <div class="form-group">
                                <label for="txtFax"><?= lang('txt_fax')?></label>
                                <input dir="<?= lang('dir_form')?>" type="tel" class="form-control" id="txtFax">
                            </div>
                            <div class="form-group">
                                <label for="txtEmail"><?= lang('txt_email')?></label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="txtEmail" required="">
                                    <div class="invalid-feedback">
                                    <?= lang('valid_mail')?> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtMesage"><?= lang('txt_message')?></label>
                                <div class="input-group">
                                    <textarea dir="<?= lang('dir_form')?>" class="form-control" rows="7" id="txtMesage" name="txtMesage"
                                        data-bv-field="txtMesage" required=""></textarea>
                                    <div class="invalid-feedback">
                                        <?= lang('valid_message')?> </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-main text-white"><?= lang('btn_main')?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>