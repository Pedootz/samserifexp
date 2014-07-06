<?php get_header();

if ( !empty($_GET['pay_attention_to_man_behind_curtain']) ) {
    $wants_toms_portfolio = strtolower( $_GET['pay_attention_to_man_behind_curtain'] );
    if ( $wants_toms_portfolio == 'true' ) {
        $wants_toms_portfolio = true;
    } else {
        $wants_toms_portfolio = false;
    }
} else {
    $wants_toms_portfolio = false;
}

if ( $wants_toms_portfolio ) {
    get_template_part( 'home' );
} else {
    get_template_part( 'home', 'oz' );
}

get_footer();
