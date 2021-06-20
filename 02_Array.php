<?php 
	// Indexable Array
	$colors = array('red', 'blue', 'green');

	print_r($colors);

	echo '<p>'.$colors[1].'</p>';

	$colors[] = 'yellow';

	print_r($colors);


	// Associative Array
	$home_towns = array(
		'Joe' => 'Middletown, NY',
		'Erin' => 'West Chester, PA',
		'Dave' => 'Exton, PA',
		'Brain' => 'Grand Rapids, MI',
	);

	echo '<pre>';
	print_r($home_towns);
	echo '</pre>';

	echo '<p>' . $home_towns['Dave']  . '<p>';
?>