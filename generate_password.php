<?php
	$email = "andrian@gmail.com";
	$foo = explode('@',$email);
	$first = $foo[0];
	$string = ['!','?','*','&'];
	shuffle($string);
	echo $first.dechex(rand(0,15)).dechex(rand(0,15)).dechex(rand(0,15)).dechex(rand(0,15));
?>