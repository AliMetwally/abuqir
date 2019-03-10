<!doctype html>
<html >
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-16">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="icon" href="<?= base_url() ?>public/images/web-icon.png">

        <!--Fonts-->
        <?php if ($this->session->site_lang === 'ar') : ?>
            <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700,900|Markazi+Text:400,500,600,700&amp;subset=arabic" rel="stylesheet">        
        <?php else: ?>
            <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700|Ubuntu:400,400i,500,500i,700" rel="stylesheet">
        <?php endif; ?>


        <?php if ($_SERVER['HTTP_HOST'] == "localhost" || (stristr($_SERVER['HTTP_HOST'], "192.168.") !== FALSE) || (stristr($_SERVER['HTTP_HOST'], "127.0.0.") !== FALSE)): ?>
            <!--- LOAD FILES -->            
            <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.min.css">

            <link rel="stylesheet" href="<?= base_url() ?>public/css/font-awesome.min.css"/>
            <link rel="stylesheet" href="<?= base_url() ?>public/css/font-awesome-animation.min.css"/>

            <script src="<?= base_url() ?>public/js/jquery-3.3.1.min.js"></script>
            <script src="<?= base_url() ?>public/js/popper.min.js"></script>
            <script src="<?= base_url() ?>public/js/bootstrap.min.js"></script>    

        <?php else: ?> 
            <!-- Load Online From CDN -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

            <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.min.css">

            <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" ></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" ></script>

        <?php endif; ?>


        <?php if (!empty($custom_css)) : ?>
            <!--Custome css-->
            <link rel="stylesheet" href="<?= base_url('public/css/pages/') . $custom_css ?>"/>
        <?php endif; ?>

        <?php if ($this->session->site_lang === 'ar') : ?>
            <link rel="stylesheet" href="<?= base_url() ?>public/css/layout/rtl_reset.css">
        <?php endif; ?>

        <?php if (!empty($custom_js)) : ?>
            <!--Custome js-->
            <script src="<?= base_url('public/js/') . $custom_js ?>"></script>

        <?php endif; ?>

        <title><?= empty($title) ? 'Abuqir' : $title ?></title>

    </head>
    <body>
        <!-- header -->
        <header>
            <div class="container-fluid logo-bar" style="position: absolute;">
                <div class="container d-flex justify-content-around">
                    <div class="ml-4"><a href="#" class="nav-link">
                            <img src="<?= base_url() ?>public/images/logo2.png" width="100px" height="130px" class="rounded" alt="...">
                            <span class="h5 font-weight-bold pl-md-logo pl-sm-logo text-main-color text-uppercase"><?= lang('abuqir')?>
                                <span class="h5 text-muted Fert-text text-uppercase"> <?= lang('fertilizers')?></span>
                        </a>
                    </div>
                    <div class="d-flex align-self-center mr-5">
                        <a class="text-muted nav-link menu-item h5" href="<?php echo base_url('LangSwitch/switchLanguage/ar')?>"><img src="<?= base_url() ?>public/images/iconfinder_EGY.png" alt=""></a>
                        <a class="text-muted nav-link menu-item h5" href="<?php echo base_url('LangSwitch/switchLanguage/en')?>"><img src="<?= base_url() ?>public/images/iconfinder_GB.png"></a>
                        <a class="nav-link menu-item text-main-color" href="" ><i class="fa fa-user-circle-o fa-2x pb-3"></i></a>
                    </div>
                </div>
            </div>
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg nav-menu nav-top">
                <a href="#" class="navbar-brand text-light text-uppercase hide-ele">
                    <img class="img-fluid img-logo d-none d-lg-block" width="100px" height="130px" style="position: absolute;top: -9px;left: 0;"
                         src="<?= base_url() ?>public/images/logo2.png" alt="">
                    <span class="company-name h5 font-weight-bold pl-md-logo pl-sm-logo text-main-color"><?= lang('abuqir')?>
                        <span class="h5 text-muted Fert-text"> <?= lang('fertilizers')?></span>
                    </span>
                </a>
                <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#myNavbar">
                    <div class="bg-main line1"></div>
                    <div class="bg-main line2"></div>
                    <div class="bg-main line3"></div>
                </button>
                <div class="collapse navbar-collapse justify-content-center text-uppercase font-weight-bold" id="myNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link m-2 menu-item nav-active"><?= lang('home_link')?></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link m-2 menu-item"><?= lang('about_link')?></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link m-2 menu-item"><?= lang('media_link')?></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link m-2 menu-item"><?= lang('reponsibility_link')?></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link m-2 menu-item"><?= lang('investors_link')?></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link m-2 menu-item"><?= lang('contact_link')?></a>
                        </li>
                        </li>
                        <li class="nav-item dropdown drop-nav">
                            <a href="#" class="nav-link m-2 menu-item" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false"><i class="fa fa-flag fa-2x pb-2"></i></a>
                            <div class="dropdown-menu dropdown-menu-right nav-menu-dropdown custom-nav">
                                <a class="nav-link menu-item" href="<?php echo base_url('LangSwitch/switchLanguage/ar')?>"><img src="<?= base_url() ?>public/images/iconfinder_EGY.png" alt="">
                                    عربى</a>
                                <a class="nav-link menu-item py-2" href="<?php echo base_url('LangSwitch/switchLanguage/en')?>" style="width: 110px;"><img src="<?= base_url() ?>public/images/iconfinder_GB.png">
                                    english</a>
                            </div>
                        </li>
                        <li class="nav-item login-nav">
                            <a href="" class="nav-link m-2 menu-item"><i class="fa fa-user-circle-o fa-2x pb-2"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar -->

            <!-- banner -->
            <div class="header-img"></div>
            <!-- end of banner -->
        </header>

        <!-- end of header -->

        <?= empty($content) ? '' : $content ?>
      
        <!-- footer -->
        <footer class="bg-dark px-5">
            <div class="container-fluid">
                <div class="row text-light py-4">
                    <div class="col-12 col-sm-4 col-lg-4 pb-3">
                        <h5 class="pb-3 font-weight-bold"><?= lang('about')?></h5>
                        <p><?= lang('about_statement')?></p>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-4 pb-3">
                        <h5 class="pb-3 font-weight-bold"><?= lang('visit')?></h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="footer-link"><i class="fa fa-check mr-2-ftr"></i><?= lang('home_link')?></a>
                            </li>
                            <li>
                                <a href="#" class="footer-link"><i class="fa fa-check mr-2-ftr"></i><?= lang('about_link')?></a>
                            </li>
                            <li>
                                <a href="#" class="footer-link"><i class="fa fa-check mr-2-ftr"></i><?= lang('media_link')?></a>
                            </li>
                            <li>
                                <a href="#" class="footer-link"><i class="fa fa-check mr-2-ftr"></i><?= lang('reponsibility_link')?></a>
                            </li>
                            <li>
                                <a href="#" class="footer-link"><i class="fa fa-check mr-2-ftr"></i><?= lang('investors_link')?></a>
                            </li>
                            <li>
                                <a href="#" class="footer-link"><i class="fa fa-check mr-2-ftr"></i><?= lang('contact_link')?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-4 pb-3">
                        <h5 class="pb-3 font-weight-bold"><?= lang('contact')?></h5>                        
                        <ul class="list-unstyled">

                            <li class="list-item mb-3"><i class="fa fa-home address-ftr"></i><small><?= lang('address')?></small></li>
                            <li class="liste-item mb-3"><i class="fa fa-globe state-ftr"></i><small><?= lang('state')?></small></li>
                            <li class="list-item mb-3"><i class="fa fa-mobile mobile-ftr"></i><small><?= lang('mobile')?></small></li>
                            <li class="list-item mb-3"><i class="fa fa-phone phone-ftr"></i><small><?= lang('phone')?></small></li>
                        </ul>
                    </div>
                </div>
                <div class="row copy-right">
                    <div class="col text-center text-light border-top pt-3">
                        <p>&copy; 2019 Copyright, All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
          <!-- back to top -->
          <div class="top-page">
            <a id="back-to-top" href="#" class="btn btn-main btn-lg back-to-top" role="button" data-toggle="tooltip" data-placement="left"><span class="fa fa-chevron-up"></span></a>
          </div>
        <!-- end for back to top -->
        <script src="<?= base_url()?>/public/js/main.js">
        </script>
    </body>
</html>