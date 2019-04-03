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
            <div class="card bg-light mb-3">
                <div class="card-header bg-main text-white"><?= lang('success_head')?></div>
                <div class="card-body">
                    <h5 class="card-title"><?= lang('success_title')?></h5>
                    <p class="card-text"><?= lang('success_p1')?></p>
                    <p class="card-text"><?= lang('success_p2')?></p>
                    <p class="card-text"><?= lang('success_p3')?></p>
                    <p class="card-text"><?= lang('success_p4')?></p>
                    <p class="card-text"><?= lang('success_p5')?></p>
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
                <div class="alert alert-secondary" role="alert">
                <h4 class="alert-heading"><?= lang('m_title')?></h4>
                <hr>
                <p class="mb-0"><?= lang('m_p')?></p>
                </div>
            </div>
            <div class="col-12">
                <div class="alert alert-secondary" role="alert">
                <h4 class="alert-heading"><?= lang('v_title')?></h4>
                <hr>
                <p class="mb-0"><?= lang('v_p')?></p>
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
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header bg-main text-white" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Collapsible Group Item #1
                        </button>
                    </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Collapsible Group Item #2
                        </button>
                    </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Collapsible Group Item #3
                        </button>
                    </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>