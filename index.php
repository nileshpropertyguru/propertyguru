<?php
	/*
	* Script to print Fizz, Buzz on multiple of 5 and 3
	* @author: Nilesh Sadarangani
	* @created-at: 27th Febuary 2014, 20:56pm
	*/

	$startLoop = $_GET['start'];
	$endLoop = $_GET['end'];
	$resultString  = "";
	$flagMultipleThree = 0;
	$flagMultipleFive = 0;

	for ($counterValue = $startLoop; $counterValue < $endLoop; $counterValue++) {
		switch ($counterValue) {
			case (($counterValue % 3) == 0):
				$resultString .= " Fizz";
				$flagMultipleThree = 1;
				$flagMultipleFive = 0;	//reset five
				if (!($counterValue % 5) == 0) {
					break;
				}
			case (($counterValue % 5) == 0):
				$resultString .= " Buzz";
				$flagMultipleFive = 1;
				if (($flagMultipleThree == 1) && ($flagMultipleFive == 1)) {
					$resultString .= " Bazzî";
				}
				$flagMultipleThree = 0;
				break;
			default:
				$resultString .= " " . $counterValue;
				//reset both flags
				$flagMultipleThree = 0;
				$flagMultipleFive = 0;
				break;	
		}
	}
	echo $resultString;
?>
