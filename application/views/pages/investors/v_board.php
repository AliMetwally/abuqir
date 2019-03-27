<div class="breadcrumb"></div>

<section class="contact py-5">
    <div class="container">
        <!-- title -->
        <div class="row mb-5">
            <div class="col m-4  text-center">
                <div class="sec-title mb-20">
                    <h2 class="text-muted">
                        <!-- <?= lang('directors_title') ?>  -->
                        <span class="title-span text-main-color"><?= lang('directors_title') ?> </span>
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
                        if ($directors) :
                            foreach ($directors as $director):
                                ?>

                                <tr>
                                    <td><?= $director->name ?></td>
                                    <td><?= $director->position ?></td>
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
