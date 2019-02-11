<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .container{
            width: 1200px;
            margin: auto;
        }

        .container p{
            color: rgb(69, 124, 214);
        }
    </style>
</head>
<body>
    
    <div class="container">
        <ul>
            <li><a href="<?php echo base_url('LangSwitch/switchLanguage/en') ?>">English</a></li>
            <li><a href="<?php echo base_url('LangSwitch/switchLanguage/ar') ?>">عربي</a></li>
        </ul>
        <!--<p>Welcome To MultiLang</p>-->
        <p><?= lang("msg"); ?></p>
        
        <p>Session Data: <?= $this->session->userdata('site_lang')?></p>
    </div>

</body>
</html>