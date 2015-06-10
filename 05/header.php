<?php
/**
 * Index File for our theme
 * 
 */
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<?php wp_head(); ?>
</head>
<body>

	<header>
		<h1><?php echo get_bloginfo();?></h1>
	</header>