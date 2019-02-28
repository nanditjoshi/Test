<?php 
// A simple PHP program to 
// find max product pair in 
// an array of integers 

// Function to find maximum 
// product pair in arr[0..n-1] 
function maxProduct( $arr, $n) 
{ 
	if ($n < 2) 
	{ 
		echo "No pairs exists\n"; 
		return; 
	} 

	// Initialize max product pair 
	$a = $arr[0]; 
	$b = $arr[1]; 

	// Traverse through every possible pair 
	// and keep track of max product 
	for ($i = 0; $i < $n; $i++) 
	for ($j = $i + 1; $j < $n; $j++) 
	{ 
		if ($arr[$i] * $arr[$j] > $a * $b) 
		{ 
			$a = $arr[$i]; 
			$b = $arr[$j]; 
		} 
	} 

	echo "Max product pair is {" , $a , ", "; 
	echo $b , "}"; 
} 

	// Driver Code 
	$arr = array(200, 50, 100, 76, 113, 1000,500); 
	$n = count($arr); 
	maxProduct($arr, $n); 

// This code is contributed by anuj_67. 
?> 
