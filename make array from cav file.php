<?php


$csv = array();
$lines = file_get_contents('new.csv');

$s= '';
$a = array();
for($i=0;$i<=strlen($lines);$i++)
{	
	//echo  $lines[$i].'\n';
	
	if(@$lines[$i] == "\n")
	{
		$a[] = $s;
		$s = '';
	}else{
		
		@$s .= $lines[$i];
	}	
}	

//echo	$s;

print_r($a);
die;

foreach ($lines as $key => $value)
{
    $csv[$key] = str_getcsv($value);
}

echo '<pre>';
print_r($csv);
echo '</pre>';



?>
