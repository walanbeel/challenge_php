<?php 
$array = array(9, 2, 15, 6, 20); 


function getMax($array) 
{ 
$num = count($array); 
$max = $array[0]; 
for ($i = 1; $i < $num; $i++) 
	if ($max < $array[$i]) 
		$max = $array[$i]; 
	return $max;	 
} 
echo(getMax($array));
echo("<br/> <br/>"); 


function getMin($array) 
{ 
$num = count($array); 
$min = $array[0]; 
for ($i = 1; $i < $num; $i++) 
	if ($min > $array[$i]) 
		$min = $array[$i]; 
	return $min;	 
} 
 
echo(getMin($array)); 
?> 
