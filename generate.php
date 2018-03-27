<?php

foreach ($_POST as $key => $value) {
	$_POST[$key] = trim($value);
}

function format_post_data($data) {
	if(strlen($data) > 0)
		return '. ' . $data;
	else {
		return '.';
	}
}

if(isset(
		$_POST['restaurant'],
		$_POST['style'],
		$_POST['CityState'],
		$_POST['area'],
		$_POST['stars'],
		$_POST['maindraw'],
		$_POST['price'],
		$_POST['dish1'],
		$_POST['dish2'],
		$_POST['attire'],
		$_POST['children'],
		$_POST['alchohol'],
		$_POST['waiters'],
		$_POST['seating'],
		$_POST['wifi'],
		//optional extra fields below
		$_POST['o_extra'],
		$_POST['f_extra'],
		$_POST['a_extra'],
		$_POST['s_extra']
	)) {

	$template = file_get_contents("template.txt");
	$template = nl2br($template);
	
	$percent = ($_POST['stars'] / 5 * 100) . "%";

	$search = array(
		'[name_of_restaurant]',
		'[style]', 
		'[city_state]', 
		'[area]',
		'[xx%]',
		'[x_stars]',
		'[draw]',
		'[$xx-$xx]',
		'[dish1]',
		'[dish2]',
		'[attire]',
		'[children]',
		'[alcohol]',
		'[waiter]',
		'[outdoor]',
		'[wi-fi]',
		//optional fields below
		'.[overall_extra]',
		'.[food_extra]',
		'.[atmosphere_extra]',
		'.[service_extra]'
	);
	$replace = array(
		$_POST['restaurant'],
		$_POST['style'],
		$_POST['CityState'],
		$_POST['area'],
		$percent,
		$_POST['stars'],
		$_POST['maindraw'],
		$_POST['price'],
		$_POST['dish1'],
		$_POST['dish2'],
		$_POST['attire'],
		$_POST['children'],
		$_POST['alchohol'],
		$_POST['waiters'],
		$_POST['seating'],
		$_POST['wifi'],
		//optional fields below
		format_post_data($_POST['o_extra']),
		format_post_data($_POST['f_extra']),
		format_post_data($_POST['a_extra']),
		format_post_data($_POST['s_extra'])
	);
	$template = str_replace($search,$replace,$template);

	echo $template;	
}