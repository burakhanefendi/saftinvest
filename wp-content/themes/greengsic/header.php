<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title><?php wp_title( '-', true, 'right' ); ?><?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/css/animations.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/css/fonts.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/css/main.css?ver=1" class="color-switcher-link">
    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/css/custom.css?ver=4">
    <link href="<?=get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">

    <!--======= Responsive Bootstrap Carousel StyleSheets =========-->
    <link href="<?=get_template_directory_uri(); ?>/css/full_width_carousel.css" rel="stylesheet" media="all">
    <script src="<?=get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>

    <script src="<?=get_template_directory_uri(); ?>/js/vendor/html5shiv.min.js"></script>
    <script src="<?=get_template_directory_uri(); ?>/js/vendor/respond.min.js"></script>
    <script src="<?=get_template_directory_uri(); ?>/js/vendor/jquery-1.12.4.min.js"></script>
    <?php wp_head(); ?>
</head>

<?php wp_footer(); ?>
<body>

<?php include('section/header.php') ?>
