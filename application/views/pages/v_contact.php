<div class="breadcrumb"></div>
<section class="contact py-5">
    <div class="container">
        <!-- title -->
        <div class="row mb-5">
            <div class="col m-4  text-center">
                <div class="sec-title mb-20">
                    <h2 class="text-muted">
                    <?= lang('contact_title')?> <span class="title-span text-main-color">
                        <?= lang('title_span')?> </span>
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
                        <h4><?= lang('plants')?></h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group unstyled">
                            <p><i class="fa fa-home px-3"></i><?= lang('plant_address')?> </p>
                            <p><i class="fa fa-phone px-3"></i><?= lang('plant_phone')?> : <span class="arabic-number"><?= lang('plant_phone1')?></span>
                                / <span class="arabic-number"><?= lang('plant_phone2')?></span>
                                / <span class="arabic-number"><?= lang('plant_phone3')?></span> </p>
                            <p><i class="fa fa-mobile fa-2x px-3"></i><?= lang('plant_mobile')?> :
                                <span class="arabic-number"><?= lang('plant_mobile1')?></span>
                                / <span class="arabic-number"><?= lang('plant_mobile2')?> </span>
                                / <span class="arabic-number"><?= lang('plant_mobile3')?> </span>
                            </p>
                            <p><i class="fa fa-fax px-3"></i><?= lang('plant_fax')?>: <span class="arabic-number"><?= lang('plant_fax1')?></span> </p>
                        </ul>
                    </div>
                </div>
                <div class="card text-dark bg-white mb-3 border-main">
                    <div class="card-header bg-main border-main text-white">
                        <h4>المكتب</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="mb-3">مكتب اسكندرية</h5>
                        <ul class="list-group unstyled">
                            <p><i class="fa fa-home px-3"></i>العنوان: <span class="arabic-number"> ٩٥</span> - طريق <span class="arabic-number">٢٦</span> يوليو - برج السلسة  </p>
                            <p><i class="fa fa-phone px-3"></i>تليفون : <span class="arabic-number">٠٠٢٠٣٤٨٧٩٩١١</span></p>
                            <p><i class="fa fa-fax px-3"></i>فاكس: <span class="arabic-number">٠٠٢٠٣٤٨٤٧٢٢٩</span></p>
                        </ul>
                        <h5 class="mb-3">مكتب القاهرة</h5>
                        <ul class="list-group unstyled">
                            <p><i class="fa fa-home px-3"></i>العنوان: <span class="arabic-number">٥</span> شارع شريف الصغير.  </p>
                            <p><i class="fa fa-phone px-3"></i>تليفون : <span class="arabic-number">٠٠٢٠٢٣٩٣٤١٧٦</span></p>
                            <p><i class="fa fa-fax px-3"></i>فاكس: <span class="arabic-number">٠٠٢٠٢٣٩٣٤١٧٦</span> </p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card text-white bg-white mb-3 border-main">
                    <div class="card-header bg-main border-main">
                        <h4><?= lang('form_title')?></h4>
                    </div>
                    <div class="card-body text-dark">
                        <form>
                            <div class="form-group">
                                <label for="txtname"><?= lang('txt_name')?></label>
                                <input type="text" class="form-control" id="txtname">
                            </div>
                            <div class="form-group">
                                <label for="txtcompany"><?= lang('txt_company')?></label>
                                <input type="text" class="form-control" id="txtcompany">
                            </div>
                            <div class="form-group">
                                <label for="txtEmail"><?= lang('txt_email')?></label>
                                <input type="email" class="form-control" id="txtEmail">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="messageType"><?= lang('message_type')?></label>
                                    <select name="message_types" class="form-control" id="messageType" data-bv-field="message_types">
                                        <option value="0"></option>
                                        <option value="1">Inquiry</option>
                                        <option value="2">Proposal</option>
                                        <option value="3">Complaint</option>
                                        <option value="4">Thanks</option>
                                        <option value="5">Other</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="contactSector"><?= lang('contact_sector')?></label>
                                    <select name="contact_sector" class="form-control" id="contactSector" data-bv-field="contact_sector">
                                        <option value="0"></option>
                                        <option value="1">IT</option>
                                        <option value="2">Human Resource</option>
                                        <option value="3">Purchasing</option>
                                        <option value="4">Finance</option>
                                        <option value="5">Marketing</option>
                                        <option value="6">General</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtMesage"><?= lang('txt_mesage')?></label>
                                <textarea class="form-control" rows="9" id="txtMesage" name="txtMesage" data-bv-field="txtMesage"></textarea>
                            </div>
                            <button type="submit" class="btn btn-main text-white">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13640.96066479133!2d30.113470357495533!3d31.269451371596578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5d70e043f5a2b%3A0xd101b0cce7ca2a89!2sAbuqir+fertilizers!5e0!3m2!1sar!2seg!4v1418747946109" width="100%" height="300px" frameborder="0" style="border:0"></iframe>
        </div>
    </div>
</section>