

<section class="project_details mt-md-5">
    <div class="container bg-white">
        <div class="row d-none d-md-block d-lg-block ">
            <?php if($project->images > 0): ?>
                <div id="carouselProjectFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner hidden-xs">
                                <?php $i = 1;
                                    foreach (range(0,($project->images - 1)) as $proj) :                     
                                        if ($i % $project->images == 1):
                                ?>
                                <?php endif;?>
                                    <div class="carousel-item <?= $i == 1? 'active':'' ?>">  
                                    <img src="<?= base_url('public/images/new_projects/'.$project->project_id)?>/<?= $i?>.jpg" class="d-block " width= "1400px" alt="...">                          
                                      
                                    <?php if (($i / $project->images) * ($i % $project->images) == 0): ?>                        
                                    </div>
                                    <?php endif;?>
                            </div>
                            <?php   $i++;
                                endforeach;?>
                                <!-- Controls -->
                        <a class="carousel-control-prev" href="#carouselProjectFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselProjectFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                </div>
            <?php endif;?>
        </div>
            <blockquote class="blockquote text-right py-3">
                <h3><?= $project->project_name_ar?></h3>
            </blockquote>
        <div class="row pb-5">  
            <div class="col-lg-12">
                <?php foreach ($projects as $pro) :?>
                    <?php if($pro['content']):?>
                        <ul class="list-unstyled">
                            <h3 class="project_head pt-3"><?= $pro['head']->head_name_ar?></h3>
                            <hr>
                                <?php foreach($pro['content']  as $con):?>
                                <p><?=  $pro['head']->head_id == 1? '' :"<i class=\"fa fa-arrow-circle-left fa-1x\">" ?></i> <?= $con->content_ar?></p>
                                <?php endforeach;?>
                        </ul>
                    <?php endif;?>
                <?php endforeach;?>
            </div>          
        </div>
    </div>
</section>