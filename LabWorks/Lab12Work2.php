<?php 

	$string = $_POST['input'];

	// Word Counter

	$word = split(" ", $string);
	$count = count($word);
	echo "There are $count words in the sentence.<br>";
	


	// DIGIT COUNTER
	$strArray = str_split($string);
	$counter = 0;
	$isDigit = '/\d/';
	for($i=0 ;$i< count($strArray); $i++){
		if(preg_match($isDigit , $strArray[$i])==1)
			$counter++;
	}

	echo "There are $counter digits in the sentence.<br>";
	


	//	ALPHA CHARACTERS

	$numAlpha = preg_match_all("/[a-zA-Z]/",$string);
	echo "There are number of $numAlpha alpha characters in $string<br>";



	//	NON-ALPHA CHARACTERS

	$numAlpha = preg_match_all("/[^a-zA-Z]/",$string);
	echo "There are number of $numAlpha non-alpha characters in $string<br>";

	
	// WHİTE CHARACTERS

	$numSpaces = preg_match_all('/[ ]/', $string);
	echo "There are number of space $numSpaces in $string";

	
?>