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

            <?php if ($this->session->site_lang === 'ar') : ?>
                <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap-rtl.min.css">

            <?php endif; ?>    

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
                <div class="container d-flex  justify-content-around">
                    <div><a href="#" class="nav-link">
                            <img src="<?= base_url() ?>public/images/logo2.png" width="100px" height="130px" class="rounded" alt="...">
                            <span class="h5 font-weight-bold pl-md-logo pl-sm-logo text-primary">AbuQir
                                <span class="h5 text-muted Fert-text"> Fertilizers</span>
                        </a>
                    </div>
                    <div class="d-flex align-self-center">
                        <a class="text-muted nav-link menu-item h5" href="#"><img src="<?= base_url() ?>public/images/iconfinder_EGY.png" alt=""></a>
                        <a class="text-muted nav-link menu-item h5" href="#"><img src="<?= base_url() ?>public/images/iconfinder_GB.png"></a>
<<<<<<< HEAD
<<<<<<< HEAD
                        <a class="nav-link menu-item text-primary" href="" ><i class="fa fa-user-circle-o fa-2x"></i></a>
=======
=======
>>>>>>> parent of 43b624c... translate template
                        <a class="nav-link menu-item text-primary" href="" ><i class="fa fa-user-circle-o fa-2x pb-3"></i></a>
>>>>>>> parent of 43b624c... translate template
                    </div>
                </div>
            </div>
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg nav-menu nav-top">
                <a href="#" class="navbar-brand text-light text-uppercase hide-ele">
                    <img class="img-fluid img-logo d-none d-lg-block" width="100px" height="130px" style="position: absolute;top: -9px;left: 0;"
                         src="<?= base_url() ?>public/images/logo2.png" alt="">
                    <span class="company-name h5 font-weight-bold pl-md-logo pl-sm-logo text-primary">AbuQir
                        <span class="h5 text-muted Fert-text"> Fertilizers</span>
                    </span>
                </a>
                <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#myNavbar">
                    <div class="bg-primary line1"></div>
                    <div class="bg-primary line2"></div>
                    <div class="bg-primary line3"></div>
                </button>
                <div class="collapse navbar-collapse justify-content-center text-uppercase font-weight-bold" id="myNavbar">
                    <ul class="navbar-nav custom-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link m-2 menu-item nav-active text-white">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link m-2 menu-item text-white">about us</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link m-2 menu-item text-white">our media</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link m-2 menu-item text-white">Social Responsibility</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link m-2 menu-item text-white">Investors Relations</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link m-2 menu-item text-white">Contact</a>
                        </li>
                        </li>
                        <li class="nav-item dropdown drop-nav">
                            <a href="#" class="nav-link m-2 menu-item text-white" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false"><i class="fa fa-flag fa-2x pb-2"></i></a>
                            <div class="dropdown-menu dropdown-menu-right nav-menu-dropdown custom-nav">
                                <a class="nav-link menu-item text-white" href="#"><img src="<?= base_url() ?>public/images/iconfinder_EGY.png" alt="">
                                    عربى</a>
                                <a class="nav-link menu-item py-2 text-white" href="#" style="width: 110px;"><img src="<?= base_url() ?>public/images/iconfinder_GB.png">
                                    english</a>
                            </div>
                        </li>
                        <li class="nav-item login-nav">
                            <a href="" class="nav-link m-2 menu-item text-white"><i class="fa fa-user-circle-o fa-2x pb-2"></i></a>
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
                <div class="col-lg-4 col-sm-4  pb-3">
                    <h5 class="pb-3 font-weight-bold">About US</h5>
                    <p>We work efficiently, safety and environmentally responsible manner to produce our products at
                        the quality required by our customer and carryout investments to maximize returns.</p>
                </div>
                <div class="col-lg-4 col-4  pb-3">
                    <h5 class="pb-3 font-weight-bold">visit</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="footer-link"><i class="fas fa-check mr-2"></i>Home</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link"><i class="fas fa-check mr-2"></i>About Us</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link"><i class="fas fa-check mr-2"></i>Our Media</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link"><i class="fas fa-check mr-2"></i>Social Responsibility</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link"><i class="fas fa-check mr-2"></i>Investors Relations</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link"><i class="fas fa-check mr-2"></i>Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-4 pb-3">
                    <h5 class="pb-3 font-weight-bold">Stay Connecting</h5>
                    <!-- <p class="small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem soluta nobis
                        natus magni!
                        Expedita iure ducimus voluptates cumque earum maiores.</p>
                    <form action="" class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email Address">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-danger text-white text-uppercase font-weight-bold">Sign
                                    Up</button>
                            </div>
                        </div>
                    </form> -->
                    <ul class="list-unstyled">

                        <li class="list-item mb-3"><i class="fas fa-home"></i> <small>Address: EL-Tabia- Rashid Road</small></li>
                        <li class="liste-item mb-3"><i class="fas fa-globe" style="margin-left: 1px;margin-right: 6px;"></i><small>Alexandria,
                                Egypt</small></li>
                        <li class="list-item mb-3"><i class="fas fa-mobile" style="margin-left: 4px;margin-right: 7px;"></i><small>Mobile
                                : (201) 001-625632</small></li>
                        <li class="list-item mb-3"><i class="fas fa-phone" style="margin-left: 1px;margin-right: 6px;"></i><small>Phone
                                : (203) 560-3053</small></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col text-center text-light border-top pt-3">
                    <p>&copy; 2019 Copyright, All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
        
        
    </body>
</html>