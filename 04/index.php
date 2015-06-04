<?php get_header(); ?>
<div class="container">
	<h2>
		Homework Answers
	</h2>

	<pre>
		$joe = new Person('joe' , '35' , 'joe@wobble.co.za');
		$ben = new Person('ben' , '37' , 'ben@wobble.co.za');

		$joe->setName('bob');
		echo $joe->name;
		//displays bob

		$ben->toString();
		//displays Name: ben , Age : 37 , Email : ben@wobble.co.za	
	</pre>
	<h2>Answers</h2>
	<pre>
		class Person {
		public $name;
		public $age;
		public $email;

		public function __construct($name, $age, $email) {
		$this->name = $name;
		$this->age = $age;
		$this->email = $email;
	}

	public function setName($set_name) {
	$this->name = $set_name;
}

public function toString() {
echo 'Name: ' . $this->name;
echo ' , Age: ' . $this->age;
echo ' , Email: ' . $this->email;
echo '<br>';
}
}
</pre>

<h2>Example</h2>
<?php

class Person {
	public $name;
	public $age;
	public $email;

	public function __construct($name, $age, $email) {
		$this->name = $name;
		$this->age = $age;
		$this->email = $email;
	}

	public function setName($set_name) {
		$this->name = $set_name;
	}

	public function toString() {
		echo 'Name: ' . $this->name;
		echo ' , Age: ' . $this->age;
		echo ' , Email: ' . $this->email;
		echo '<br>';
	}
}

$joe = new Person('joe' , '35' , 'joe@wobble.co.za');
$ben = new Person('ben' , '37' , 'ben@wobble.co.za');

$joe->setName('bob');
echo $joe->name;
	//displays bob
echo '<br>';
$ben->toString();
	//displays Name: ben , Age : 37 , Email : ben@wobble.co.za	


?>

<h2>THE LOOOP</h2>
<h3>https://codex.wordpress.org/The_Loop</h3>



<pre>
	if ( have_posts() ) : while ( have_posts() ) : the_post();
	print_r(get_post(get_the_id()));
	endwhile; else :
	echo 'Sorry, no posts matched your criteria.';
	endif;
	wp_reset_postdata();
</pre>
<h2>Working Example</h2>
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();

?>
<pre>
	<?php
	print_r(get_post(get_the_id()));
	?>
</pre>
<?php
endwhile; else :
echo 'Sorry, no posts matched your criteria.';
endif;
wp_reset_postdata();
?>

<h2>Customizin the Loop</h2>

<pre>
	$query_args = array(
	'post_type' => 'post',
	);
	/* The Query. */
	query_posts( $query_args );

	/* The Loop. */
	if ( have_posts() ) {
	while ( have_posts() ) { the_post(); 

	echo the_title();
}
}
wp_reset_postdata();
</pre>

<h2>Workin</h2>
<?php

$query_args = array(
	'post_type' => 'post',
	);
/* The Query. */
query_posts( $query_args );

/* The Loop. */
if ( have_posts() ) {
	while ( have_posts() ) { the_post(); 

		echo the_title();
	}
}
wp_reset_postdata();
?>

<h2>Can we agree to have arguments?</h2>

<pre>
	$args = array(
	'posts_per_page'   => 5,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => '',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'post_status'      => 'publish',
	'suppress_filters' => true 
	);	
	query_posts( $args );
	if ( have_posts() ) {
	while ( have_posts() ) { the_post(); 
	echo the_title();
}
}
wp_reset_postdata();


</pre>

<h2>Example</h2>

<?php
$args = array(
	'posts_per_page'   => 5,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => '',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'page',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'post_status'      => 'publish',
	'suppress_filters' => true 
	);
query_posts( $args );
if ( have_posts() ) {
	while ( have_posts() ) { the_post(); 
		echo the_title();
	}
}
wp_reset_postdata();

?>

<h2>Categories</h2>
<h3>Lets Create a category</h3>

<pre>
	$args = array(
	'category_name'         => 'hello',
	'category'         => 'category',
	'post_type'        => 'post'
	);
	query_posts( $args );
	if ( have_posts() ) {
	while ( have_posts() ) { the_post(); 
	echo the_title();
}
}
wp_reset_postdata();

</pre>

<h2>Example</h2>
<?php
$args = array(
	'category_name'    => 'hello',
	'category'         => 'category',
	'post_type'        => 'post'
	);
query_posts( $args );
if ( have_posts() ) {
	while ( have_posts() ) { the_post(); 
		echo the_title();
	}
}
wp_reset_postdata();
?>

<h2>Tags</h2>

<pre>
	$args = array(
	'tag_slug__in' => array('hi'),
	'post_type'  => 'post'
	);
	query_posts( $args );
	if ( have_posts() ) {
	while ( have_posts() ) { the_post(); 
	echo the_title();
}
}
wp_reset_postdata();	
</pre>

<h2>Example</h2>
<?php
$args = array(
	'tag_slug__in' => array('hi'),
	'post_type'  => 'post'
	);
query_posts( $args );
if ( have_posts() ) {
	while ( have_posts() ) { the_post(); 
		echo the_title();
	}
}
wp_reset_postdata();
?>

<h2>
	Homework
</h2>
<ul style="line-height:60px;">
	<li>Display Custom Fields in the backend using the "Screen Options"</li>
	<li>Add a custom field to the "post" post type of "color"</li>
	<li>Get the background to display on the post based on the custom field value</li>
	<li><strong>Hint:</strong><a target="_blank" href="https://codex.wordpress.org/Function_Reference/get_post_meta">
	https://codex.wordpress.org/Function_Reference/get_post_meta</a></li>
</ul>

</div>
<?php get_footer(); ?>