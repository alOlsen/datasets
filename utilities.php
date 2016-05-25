<?php

function sanitizeString( $str ){

	$str = strip_tags($str);
	$str = htmlentities($str);
	$str = stripslashes($str);

	return $str;
}

?>