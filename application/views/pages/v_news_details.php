
<section class="news-details pt-5">
    <div class="breadcrumb"></div>
    <div class="container">
        <div class="row pt-0 pt-lg-5">
            <div id="carouselnewsPara1" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <?php 
                    $i = 1;
                    foreach ($newsDetail as $det):  ?>
                    <?php if(!empty($det->content_image)): ?>
                    <div class="carousel-item  <?= $i == 1? 'active':'' ?>">
                        <img class="d-block img-news" width="1100px;" src="<?= base_url('uploads/press-news/').$det->content_image?>">
                    </div>
                    <?php endif;?>
                    <?php 
                    $i++;
                    endforeach;?>
                </div>
                <a class="carousel-control-prev" href="#carouselnewsPara1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselnewsPara1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- title -->
        <div class="row">
                    <div class="col m-4  text-center">
                        <div class="sec-title mb-20">
                            <h4 class="text-muted mb-3  text-center">
                                <?= $newsHead->title;?>
                                <span class="sec-title-border">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>
        <!-- end of title -->
        <div class="row">
            <div class="col-12 col-lg-9 bg-white">
               
                <?php 
                $i = 1;
                foreach ($newsDetail as $det): ?>
                <?php  
                if(!empty($det->content)):?>
                <div class="row mt-3 py-2">
                    <div class="col-12 col-lg-12 justify-content-start d-block mt-3 mt-lg-0 <?= $i % 2 == 0? '':'order-lg-first'?>">
                        <p><?= $det->content?></p>
                    </div>
                </div>
                <?php endif; ?>
                <?php
                $i++;
                endforeach;?>
            </div>
            <div class="col-12 col-lg-3">
                <div class="latest-3 sticky-top mb-5 mb-lg-0">
                    <h4><?= lang('news_top')?></h4>
                        <?php foreach ($topNews as $news): ?>                    
                            <div class="media my-3">
                                    <img src="<?=base_url("/uploads/press-news/$news->image")?>" class="border-main img-slide" alt="...">
                                    <div class="media-body">                                
                                        <p class="mt-0"><a href="<?php echo base_url('home/newsDetails/').$news->news_id ;?>"><?= $news->title?></a></p>
                                    </div>
                            </div>                    
                        <?php endforeach;?>
                </div>    
            </div>
        </div>
    </div>
</section>
                