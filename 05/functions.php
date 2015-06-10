<?php

add_action( 'init', 'test_function' );

function test_function() {


}

add_filter( 'the_title', function( $title ) { return '<h3>' . $title . '</h3>'; } );

add_action( 'widgets_init', 'register_wd' , 11 );

function register_wd() {
	register_sidebar( array('name' => 'Top Banner', 'id' => 'top_banner') );
}

// [bartag foo="foo-value"]
function bartag_func( $atts ) {
    $a = shortcode_atts( array(
        'foo' => 'something',
        'bar' => 'something else',
    ), $atts );

    return "foo = {$a['foo']}";
}
add_shortcode( 'bartag', 'bartag_func' );