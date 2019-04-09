<div class="breadcrumb"></div>
<section class="contact py-5">
    <div class="container">
        <!-- title -->
        <div class="row mb-5">
            <div class="col m-4  text-center">
                <div class="sec-title mb-20">
                    <h2 class="text-muted">
                        <?= lang('contact_title') ?> <span class="title-span text-main-color">
                            <?= lang('title_span') ?> </span>
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
                <div class="card bg-white mb-3 border-main">
                    <div class="card-header bg-main border-main text-white">
                        <h4><?= lang('plants') ?></h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group unstyled">
                            <p><i class="fa fa-home px-3"></i><?= lang('plant_address') ?> </p>
                            <p><i class="fa fa-phone px-3"></i><?= lang('plant_phone') ?> : <small><span class="arabic-number"><?= lang('plant_phone1') ?></span>
                                    / <span class="arabic-number"><?= lang('plant_phone2') ?></span>
                                    / <span class="arabic-number"><?= lang('plant_phone3') ?></span></small></p>
                            <p><i class="fa fa-mobile fa-2x px-3"></i><?= lang('plant_mobile') ?> :
                                <small><span class="arabic-number"><?= lang('plant_mobile1') ?></span>
                                    / <span class="arabic-number"><?= lang('plant_mobile2') ?> </span>
                                    / <span class="arabic-number"><?= lang('plant_mobile3') ?> </span>
                                </small></p>
                            <p><i class="fa fa-fax px-3"></i><?= lang('plant_fax') ?>: <small><span class="arabic-number"><?= lang('plant_fax1') ?></span> </small></p>
                        </ul>
                    </div>
                </div>
                <div class="card text-dark bg-white mb-3 border-main">
                    <div class="card-header bg-main border-main text-white">
                        <h4><?= lang('office') ?></h4>
                    </div>
                    <div class="card-body mb-1">
                        <h5 class="mb-3"><?= lang('alex_office') ?></h5>
                        <ul class="list-group unstyled">
                            <p><i class="fa fa-home px-3"></i><?= lang('address_office') ?>: <?= lang('address_office_alex') ?> </p>
                            <p><i class="fa fa-phone px-3"></i><?= lang('phone_office') ?>: <small><span class="arabic-number"><?= lang('phone_office_alex') ?></span></small></p>
                            <p><i class="fa fa-fax px-3"></i><?= lang('fax_office') ?>: <small><?= lang('fax_office_alex') ?></small></p>
                        </ul>
                        <h5 class="mb-3"><?= lang('cairo_office') ?></h5>
                        <ul class="list-group unstyled">
                            <p><i class="fa fa-home px-3"></i><?= lang('address_office') ?>: <?= lang('address_office_cairo') ?> </p>
                            <p><i class="fa fa-phone px-3"></i><?= lang('phone_office') ?>: <small><span class="arabic-number"><?= lang('phone_office_cairo') ?></span></small></p>
                            <p><i class="fa fa-fax px-3"></i><?= lang('fax_office') ?>: <small><?= lang('fax_office_cairo') ?></small></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card text-white bg-white mb-3 border-main">
                    <div class="card-header bg-main border-main">
                        <h4><?= lang('form_title') ?></h4>
                    </div>
                    <div class="card-body text-dark">
                        <form class="needs-validation" novalidate method="get" action="home/saveContact">
                            <div class="form-group">
                                <label for="txtname"><?= lang('txt_name') ?></label>
                                <div class="input-group">
                                    <input dir="<?= lang('dir') ?>" name="txtName" type="text" class="form-control" id="txtname" required>
                                    <div class="invalid-feedback">
                                        <?= lang('valid_name') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtcompany"><?= lang('txt_company') ?></label>
                                <input dir="<?= lang('dir') ?>" name="txtCompany" type="text" class="form-control" id="txtcompany">
                            </div>
                            <div class="form-group">
                                <label for="txtEmail"><?= lang('txt_email') ?></label>
                                <div class="input-group">                                    
                                    <input type="email" class="form-control" name="txtEmail" id="txtEmail" required>
                                    <div class="invalid-feedback">
                                        <?= lang('valid_mail') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="messageType"><?= lang('message_type') ?></label>
                                    <div class="input-group">
                                        <?php
                                        $attr1 = array('class' => 'form-control', 'id' => 'messageType', 'dir' => lang('dir'), 'name' => 'message_types', 'data-bv-field' => 'message_types', 'required' => 'required');
                                        // the medical types list
                                        echo form_dropdown('message_types', array(0 => '') + $lst_message_types, array(0 => ''), $attr1);
                                        ?>
                                        <div class="invalid-feedback">
                                            <?= lang('valid_type') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="contactSector"><?= lang('contact_sector') ?></label>
                                    <div class="input-group">
                                        <?php
                                        $attr1 = array('class' => 'form-control', 'id' => 'contactSector', 'dir' => lang('dir'), 'name' => 'contact_sector', 'data-bv-field' => 'contact_sector');
                                        // the medical types list
                                        echo form_dropdown('contact_sector', array(0 => '') + $lst_contact_sector, array(0 => ''), $attr1);
                                        ?>
                                        <div class="invalid-feedback">
                                            <?= lang('valid_sector') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtMesage"><?= lang('txt_mesage') ?></label>
                                <div class="input-group">
                                    <textarea dir="<?= lang('dir') ?>"  class="form-control" rows="7" id="txtMesage" name="txtMesage" data-bv-field="txtMesage" required></textarea>                                    
                                    <div class="invalid-feedback">
                                        <?= lang('valid_mesage') ?>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-main text-white"><?= lang('btn_main') ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13640.96066479133!2d30.113470357495533!3d31.269451371596578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5d70e043f5a2b%3A0xd101b0cce7ca2a89!2sAbuqir+fertilizers!5e0!3m2!1sar!2seg!4v1418747946109" width="100%" height="300px" frameborder="0" style="border:0"></iframe>
            </div>   

        </div>
    </div>
</section>


