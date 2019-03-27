<div class="breadcrumb"></div>
<section class="py-5 news-blog">
    <div class="container">
        <!-- title -->
        <div class="row">
            <div class="col m-4  text-center">
                <div class="sec-title mb-20">
                    <h2 class="text-muted">
                        Our <span class="title-span text-main-color">
                            News</span>
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
            <?php
            $i = 1;
            foreach ($allNews as $news):                                
            if ($i % 2 == 1):
            ?>
            <div class="col-12 col-lg-6">
                <?php endif;?>
                <div class="single-news">
                    <div class="row">
                        <div class="col-sm-5">
                            <a href="#"><img class="d-block w-100" src="<?=base_url("/uploads/press-news/$news->image")?>"
                                    alt="blog"></a>
                        </div>
                        <div class="col-sm-7">
                            <div class="news-details m-3">
                                <a href="#">
                                    <p class="news-title font-weight-bold text-main-color">
                                        <?= $news->title?>
                                    </p>
                                </a>
                                <p class="small">
                                    <?= $news->content?>
                                </p>
                                <a href="<?php echo base_url('home/newsDetails/').$news->news_id ;?>" class="btn btn-outline-main">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if (($i / 2) * ($i % 2) == 0): ?>
            </div>
            <?php endif;?>
            <?php 
                        
                        $i++;
                        endforeach;?>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row justify-content-center">            
            <?= $pagination?>
        </div>
    </div>
</section>