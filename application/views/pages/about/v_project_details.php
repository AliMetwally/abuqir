

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
          
        <div class="card border-light py-3 <?= lang('text_dir')?>">
            <div class="card-header bg-transparent">
                <h4><?= $project->project_name?></h4>
            </div>
                <?php foreach ($projects as $pro) :?>
                    <?php if($pro['content']):?>
                        <div class="card-body">
                            <h5 class="card-title bg-main py-3 px-2 text-white"><?= $pro['head']->head_name?></h5>
                                <?php foreach($pro['content']  as $con):?>
                                    <p class="card-text px-2"><?=  $pro['head']->head_id == 1? '' :"<i class=\"fa fa fa-check-square-o fa-1x text-main-color\">" ?></i> <?= $con->content?></p>
                                <?php endforeach;?>
                        </div>
                    <?php endif;?>
                <?php endforeach;?>
        </div>
    </div>
</section>