<?php get_template_part( 'header', 'tom' ); ?>

<style>
    .margin-top {
        margin-top: 10px;
    }
    header#doc-header {
        background: #565557 !important;
    }
    footer#doc-footer {
        background-color: #565557 !important;
    }
    li.active:not(.thumbnail) {
        background: #565557 !important;
    }
    div#logo {
        background-image: url("../img/logo-tom.png");
    }
</style>

<article id='home-content'>
            <div id="logo" data-role="text" alt="Sam Serif Designs"></div>
            <div id="main-copy">
                <h1>i'm not sam. i'm tom.</h1>
                <p class='margin-top'>i am a full-stack web developer based in philly. i'm experienced in html, css, js (client and server), php, git, mysql, mongodb, linux server admin, and a whole lot more. i believe in code that communicates in its simplicity, functionality, and brevity. above all, i believe in invisibility... </p>
                <p class='margin-top'>if you're doing it right, they won't be sure you've done anything at all.</p>
                <p class='margin-top'>ps: don't tell sam ;)</p>
            </div>
            <ul class='control'>
                <li class="filter active" data-media-type='web' id="web-filter"><a href='#'>work</a></li><!--
             --><li class="filter" data-media-type='print' id="print-filter"><a href='#'>skills</a></li><!--
             --><li class="filter" data-media-type='apparel' id="apparel-filter"><a href='#'>awards</a></li>
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
                        <?php if ( has_category(6) ) { ?>
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
                            <?php } // end if id == 6 ?>

                    <?php endwhile; ?>

                <?php } ?>
            </ul>
            <div style='height: 50px; width: 100%'></div><!--do this with a margin on the thumbnail container-->
            </article>
        </div>
    <?php get_template_part( 'footer', 'tom' ); ?>