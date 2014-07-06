<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title(''); ?></title>

        <!-- mobile meta (hooray!) -->
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="description" content="Hi, my name is Samantha Provenza.  I create things that are beautiful.">
        <meta name="viewport" content="width=device-width, initial-scale=.9, maximum-scale=.9, user-scalable=0">

        <!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        <!--[if IE]>
            <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        <![endif]-->
        <!-- or, set /favicon.ico for IE10 win -->
        <meta name="msapplication-TileColor" content="#f01d4f">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
        <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <!-- wordpress head functions -->
        <?php wp_head(); ?>
        <!-- end of wordpress head -->

        <!-- drop Google Analytics Here -->
        <!-- end analytics -->

    </head>

    <body <?php body_class(); ?>>
         <div id='doc-wrapper'>
            <header id='doc-header'>
                <a class='header-social' id='linked-header' target='_blank' href='https://www.linkedin.com/in/thomaspeduto'></a>
                <a class='header-social' id='mail-header' target='_blank' href='mailto:thomas.peduto@gmail.com.com'></a>
            </header>
