<div class="breadcrumb"></div>

<section class="contact py-5">
    <div class="container">
        <!-- title -->
        <div class="row mb-5">
            <div class="col m-4  text-center">
                <div class="sec-title mb-20">
                    <h2 class="text-muted">
                        <!-- <?= lang('contact_title') ?> -->
                        <span class="title-span text-main-color">
                            <?= lang('association_title') ?> </span>
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

        
            <div class="row files">
                <div class="col-md-12">
                    
                    <?php 
                        $title_arr = array();
                        foreach ($files as $file):
                            $title_arr = $file->title;
                        endforeach;
                        
                        if (!$title_arr):
                    ?>
                    <p><?= lang('no_files')?></p>
                    <?php
                        endif;
                    ?>
                    
                    <?php if (!$files) : ?>
                    <p><?= lang('no_files')?></p>
                    <?php endif; ?>
                    
                    <ul class="list-unstyled">
                        <?php
                        foreach ($files as $file):
                            if ($file->file_path) :
                                ?>
                                <li>
                                    <i class="fa fa-file-pdf-o"></i>
                                    <a href="<?= base_url('uploads/finantial/' . $file->file_path) ?>"><?= $file->title ?></a>
                                </li>
                                <?php
                            endif;
                        endforeach;
                        ?>                                


                    </ul>
                </div>
            </div>                   
        


    </div>
</section>
