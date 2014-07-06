<?php
/*
Template Name:Home Band-aid
*/
?>

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
                <a class='header-social' id='pin-header' target='_blank' href='http://pinterest.com/prosam123/samserif/'></a>
             --><a class='header-social' id='linked-header' target='_blank' href='http://www.linkedin.com/pub/samantha-provenza/30/917/155'></a>
             --><a class='header-social' id='mail-header' target='_blank' href='mailto:sam@samserifdesign.com'></a>
            </header>

    <article id='home-content'>
            <div id="logo" data-role="text" alt="Sam Serif Designs"></div>
            <div id="main-copy">
                <h1>i'm sam.</h1>
                <!--comment-->
                <p>i am a designer based in philly.
                    i create beautiful things for web, print, and apparel with a focus on clean design and usabillity.
                    let's talk about how i can make beautiful things for you.</p>
            </div>
            <ul class='control'>
                <li class="filter active" data-media-type='web' id="web-filter"><a href='#'>web</a></li><!--
             --><li class="filter" data-media-type='print' id="print-filter"><a href='#'>print</a></li><!--
             --><li class="filter" data-media-type='apparel' id="apparel-filter"><a href='#'>apparel</a></li>
            </ul>

            <ul id='thumbnails'>
                <?php $thumbnail_args = array( "post_type" => "work-sample" ); ?>
                <?php $thumbnail_query = new WP_query( $thumbnail_args ); ?>
                <?php $thumbnail_custom_para = array( "raw" => true ); ?>
                <?php $thumbnail_web_count = 1; ?>
                <?php $thumbnail_print_count = 1; ?>
                <?php $thumbnail_apparel_count = 1; ?>


                <?php if ( $thumbnail_query->have_posts() ) { ?>

                    <?php while ( $thumbnail_query->have_posts() ) : $thumbnail_query->the_post(); ?>

                        <?php $thumbnail_url = types_render_field( "website-link", $thumbnail_custom_para ); ?>
                        <?php $thumbnail_orientation = types_render_field( "preview-orientation", $thumbnail_custom_para ); ?>
                        <?php $thumbnail_img_sm = types_render_field( "thumbnail-image", $thumbnail_custom_para ); ?>
                        <?php $thumbnail_img_lg = types_render_field( "full-size-image", $thumbnail_custom_para ); ?>
                        <?php $thumbnail_class = types_render_field( "media-type", $thumbnail_custom_para ); ?>
                        <?php $thumbnail_alt = types_render_field( "alt-text", $thumbnail_custom_para ); ?>
                        <?php $thumbnail_desc = get_the_content(); ?>

                        <?php if ( $thumbnail_class == "web" ) { ?>
                            <li data-media="web" data-orientation="<?php echo $thumbnail_orientation; ?>" data-position="<?php echo $thumbnail_web_count; ?>"
                                <?php if ( $thumbnail_url != "" ) { ?>  data-link='<?php echo $thumbnail_url; ?>' <?php } ?>
                                class='thumbnail active visable <?php echo $thumbnail_class; ?>' data-largesrc="<?php echo $thumbnail_img_lg; ?>" data-title="<?php the_title(); ?>" data-description='<?php echo $thumbnail_desc; ?>'>
                                <div class='thumbnail-image' style="background-image: url('<?php echo $thumbnail_img_sm; ?>')"></div>
                            </li>
                            <?php $thumbnail_web_count++; ?>

                        <?php } if ( $thumbnail_class == "print" ) { ?>
                            <li data-media="print" data-orientation="<?php echo $thumbnail_orientation; ?>" data-position="<?php echo $thumbnail_print_count; ?>"
                                <?php if ( $thumbnail_url != "" ) { ?> data-link='<?php echo $thumbnail_url; ?>' <?php } ?>
                                class='thumbnail <?php echo $thumbnail_class; ?>' style='display: none;' data-largesrc="<?php echo $thumbnail_img_lg; ?>" data-title="<?php the_title(); ?>" data-description='<?php echo $thumbnail_desc; ?>'>
                                <div class='thumbnail-image' style="background-image: url('<?php echo $thumbnail_img_sm; ?>')"></div>
                            </li>
                            <?php $thumbnail_print_count++; ?>

                            <?php } if ( $thumbnail_class == "apparel" ) { ?>
                            <li data-media="apparel" data-orientation="<?php echo $thumbnail_orientation; ?>" data-position="<?php echo $thumbnail_apparel_count; ?>"
                                <?php if ( $thumbnail_url != "" ) { ?> data-link='<?php echo $thumbnail_url; ?>' <?php } ?>
                                class='thumbnail <?php echo $thumbnail_class; ?>' style='display: none;' data-largesrc="<?php echo $thumbnail_img_lg; ?>" data-title="<?php the_title(); ?>" data-description='<?php echo $thumbnail_desc; ?>'>
                                <div class='thumbnail-image' style="background-image: url('<?php echo $thumbnail_img_sm; ?>')"></div>
                            </li>
                            <?php $thumbnail_apparel_count++; ?>
                            <?php } ?>

                    <?php endwhile; ?>

                <?php } ?>
            </ul>
            <div style='height: 50px; width: 100%'></div><!--do this with a margin on the thumbnail container-->
            </article>
        </div>

<?php get_footer(); ?>
