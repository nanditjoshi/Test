<?php 

$a = array(150,20,11,200,50,8,100);

print_r($a);

$n = $a[0];

for($i=0;$i<=count($a);$i++)
{
	if(@$n < @$a[$i])
	{
		$n =  $a[$i];
	}
}	
echo "<br>";
echo "Result is -->" . $n;

echo "<br>";echo "<br>";echo "<br>";echo "<br>";


$a = array(-150,-20,-11,-200,-50,-8,-100);

print_r($a);

$n = $a[0];

for($i=0;$i<=count($a);$i++)
{
	if(@$n < @$a[$i])
	{
		$n =  $a[$i];
	}
}	
echo "<br>";echo "<br>";
echo "Result is -->" . $n;
?>