<?php get_header();
 ?>

<h2>
	Homework
</h2>
<?php

if ( have_posts() ) {
	while ( have_posts() ) { the_post(); 
		var_dump(get_post_meta( get_the_ID(), 'color' )[0]);
		?>
		<h1 style="background-color: <?php echo get_post_meta( get_the_ID(), 'color' )[0]; ?>;">
			<?php echo get_the_title(); ?>
		</h1>

		<?php
	}
}
wp_reset_postdata();
?>


<h2>Hooks</h2>

<h4>Example events</h4>

<p>
	Wordpress starts 	
</p>
<p>
	Wordpress Outputs Styles
</p>
<p>
	WordPress Outputs Content	
</p>
<p>
	Wordpress Outputs Javascripts	
</p>
<p>
	Wordpres Ends 
	
</p>

<h2>The Init Action</h2>

<h2>The title filter</h2>
<?php
if ( have_posts() ) {
	while ( have_posts() ) { the_post(); 
		echo the_title();
	}
}

?>
<h2>Top Banner Widget Area</h2>
<?php if ( is_active_sidebar( 'top_banner' ) ) : ?>
	<?php dynamic_sidebar( 'top_banner' ); ?>
<?php endif; ?>  
<?php
	$args = array(
	'name'          => 'Top Banner',
	'id'            => 'top_banner',
	'description'   => '',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );
?>

<h2>Use this in a template</h2>
<a href="/sample-page/">Sample Page</a>
<?php get_footer(); ?>