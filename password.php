<?php

function passGenerator() {
	$alpha = "abcdefghijklmnopqrstuvwxyxABCDEFGHIJKLMNOPQRSTUVWXYX0123456789";
	$length = strlen($alpha)-1;
	$pass = array();
	for($i=0; $i<10; $i++) {

		$temp = rand(0, $length);
		$pass[] = $alpha[$temp];

		
	}
	return implode( $pass);
}


?>