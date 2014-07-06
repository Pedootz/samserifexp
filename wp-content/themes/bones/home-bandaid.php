<?php
/*
Template Name:Home Band-aid
*/
?>

<?php get_header();

if ( array_key_exists('pay_attention_to_man_behind_curtain', $_GET) ) {
    get_template_part( 'home', 'oz' );
} else {
    get_template_part( 'home',);
}

get_footer();
