<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/geral.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/<?php echo $style; ?>.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bower_components/wow/css/libs/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/plugins.css">
</head>
<body> 
    <?php include('includes/organisms/menu-responsive.php'); ?>
    <div class="layout">        
        <header>
            <div class="container">
                <div class="links"> 
                <?php include('includes/organisms/menu.php'); ?>
                    <a class ="toggle wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s" href="javascript:;">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>

                    <ul class="social wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="icon-social-1 "><li><a href="#"><i class="fas fa-code"></i></a></li></div>
                        <div class="icon-social-2 "><li><a href="#"><i class="fas fa-guitar"></i></a></li></div>
                    </ul>
                </div>
                <div class="wow fadeInUpBig titulo-slide" data-wow-duration="1s" data-wow-delay=".1s">
                <h1><?php echo $chamada; ?></h1>
                <p>Realize seu sonho de tocar!</p>
                </div>
            </div>
        </header> 
        <main>