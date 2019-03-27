<div class="breadcrumb"></div>

<section class="contact py-5">
    <div class="container">
        <!-- title -->
        <div class="row mb-5">
            <div class="col m-4  text-center">
                <div class="sec-title mb-20">
                    <h2 class="text-muted">
                        <!-- <?= lang('sharholders_title') ?> --> <span class="title-span text-main-color">
                            <?= lang('sharholders_title') ?> </span>
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
                        if ($shareholdes) :
                            foreach ($shareholdes as $member):
                            ?>
                        
                        <tr>
                            <td><?= $member->name?></td>
                            <td><?= $member->ratio ?>%</td>
                        </tr>
                        
                        <?php 
                        endforeach;
                        endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div> <!-- end container -->



</section>
