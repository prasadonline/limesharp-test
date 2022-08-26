<?php


/*
 * Task 1
 * Prasad D. Warnakulasuriya 
 * https://PrasadOnline.com
 */

function repeat(array $num){
	$newString = '';
	$count = 3;

	$comma_separated = implode(",", $num);
	for($i=0 ; $i<$count ; $i++){
		$newString .= $comma_separated;
		
		if($i == $count-1){
			$newString = '[ '.$newString.' ]';
		}else{
		    $newString .= ',';
		}
	}
	echo $newString; 
}

repeat([1,2,3]);

echo '<br><br>';



/*
 * Task 2
 * Prasad D. Warnakulasuriya 
 * https://PrasadOnline.com
 */

function reformat($text){
	$vowels = array('a','e','i','o','u','A','E','I','O','U');
	$cleaned = str_replace($vowels,"",$text);
	$cleaned = strtolower($cleaned);
	echo ucfirst($cleaned);
}

reformat("liMeSHArp DeveLoper TEST");

echo '<br><br>';






?>