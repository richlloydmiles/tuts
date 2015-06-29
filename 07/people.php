<?php

if (isset($_POST['name'])) {
	$arr = array(
		'reeva' => array('gender' => 'female' , 'sport' => 'soccer') ,
		'franco' => array('gender' => 'male' , 'sport' => 'rugby') ,
		'dwight' => array('gender' => 'male' , 'sport' => 'formula 1') );
	echo json_encode($arr[$_POST['name']]);
}
?>