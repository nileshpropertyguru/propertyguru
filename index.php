<?php
	/*
	* Script to print Fizz, Buzz on multiple of 5 and 3
	* @author: Nilesh Sadarangani
	* @created-at: 27th Febuary 2014, 20:56pm
	*/

	$startLoop = $_GET['start'];
	$endLoop = $_GET['end'];
	$resultString  = "";

	for ($counterValue = $startLoop; $counterValue <= $endLoop; $counterValue++) {
		switch ($counterValue) {
			case (($counterValue % 3) == 0):
				$resultString .= " Fizz";
				if (!($counterValue % 5) == 0) {
					break;
				}
			case (($counterValue % 5) == 0):
				$resultString .= "Buzz";
				break;
			default:
				$resultString .= " " . $counterValue;
				break;
		}
	}
	echo $resultString;
?>
