<div class="breadcrumb"></div>

<section class="contact projects py-5">
    <div class="container">
        <!-- title -->
        <div class="row mb-5">
            <div class="col m-4  text-center">
                <div class="sec-title mb-20">
                    <h2 class="text-main-color">
                        <?= lang('project_title')?> <span class="title-span">
                            <?= lang('project_span')?> </span>
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
            <div class="col-lg-6">
                <img class="w-100" src="<?= base_url('/public/images/projects_intro.png')?>" alt="">
            </div>
            <div class="col-lg-6 mt-3 mt-md-0">
                <p class="lead"><?= lang('project_p')?></p>
            </div>
        </div>
    </div>
</section>
<section class="bg-white py-5 new-projects">
    <div class="container">
        <div class="row justify-content-around">
            <?php foreach ($projects as $pro):  ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="project-box">
                        <div class="project-icon">
                            <i class="fa fa-industry" aria-hidden="true"></i>
                        </div>
                        <div class="project-text">
                            <h5><?= $pro->project_name?></h5>
                            <p class="small"><?= $pro->content?> ....</p>
                            <a href="<?= base_url('about/project_details/').$pro->project_id?>" class="btn btn-outline-main">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>