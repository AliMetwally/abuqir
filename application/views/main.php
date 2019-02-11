<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= empty($title) ? 'Abuqir' : $title ?></title>


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
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.min.css">

            <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" ></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" ></script>

        <?php endif; ?>

        <!--Custome css-->
        <?php if (!empty($custom_css)) :?>
        <link rel="stylesheet" href="<?= base_url('public/css/pages/') .  $custom_css?>"/>
        <?php endif; ?>

        <!--Custome js-->
        <?php if (!empty($custom_js)) :?>
        <link rel="stylesheet" href="<?= base_url('public/css/pages/') .  $custom_js?>"/>
        <?php endif; ?>

    </head>
    <body>

        <?= $content ?>

    </body>
</html>