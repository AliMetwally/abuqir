

<section class="contact py-5 mt-md-5">
    <div class="container bg-white">        
        <div class="row d-none d-md-block d-lg-block">
            <!--Carousel-->
            <?php if ($images) : ?>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php for ($i = 0; $i < count($images); $i++): ?>
                            <div class="carousel-item  <?= $i === 0 ? 'active' : '' ?>">
                                <img src='<?= base_url("/public/images/plants/$images[$i]") ?>' class="d-block w-100" alt="...">
                            </div>
                        <?php endfor; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        
        <!-- Start Plant abuqir 1-->
        <div class="card border-light py-3 <?= lang('text_dir') ?>">
            <div class="card-header bg-transparent">
                <h4>مصنع أبوقير I</h4> <!-- plant name -->
            </div>
            <!-- -->
            <div class="card-body">
                <h5 class="card-title bg-main py-3 px-2 text-white">الوحدات الإنتاجية</h5>
                
                <p class="card-text px-2"><i class="fa fa-arrow-circle-left fa-1x text-main-color"></i>  مصنع النشادر بإنتاجية 1150 طن/يوم</p>
                <p class="card-text px-2"><i class="fa fa-arrow-circle-left fa-1x text-main-color"></i>  مصنع اليوريا بإنتاجية 1550 طن/يوم </p>
                
            </div>
            
            <div class="card-body">
                <h5 class="card-title bg-main py-3 px-2 text-white">المنتجات</h5>
                
                <p class="card-text px-2"><i class="fa fa-arrow-circle-left fa-1x text-main-color"></i> يوريا محببة </p>
                <p class="card-text px-2"><i class="fa fa-arrow-circle-left fa-1x text-main-color"></i> يوريا محببة معالجة</p>
                <p class="card-text px-2"><i class="fa fa-arrow-circle-left fa-1x text-main-color"></i> بدء إنتاج اليوريا المحببة يوليو 1979</p>
                <p class="card-text px-2"><i class="fa fa-arrow-circle-left fa-1x text-main-color"></i>  بدء إنتاج اليوريا المحببة المعالجة بكبريتات الزنك فبراير 2005</p>
                
            </div>
        </div>
        <!--End Planet abuqir 1-->

    </div>
</section>