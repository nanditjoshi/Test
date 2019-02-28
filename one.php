<?php



function format_bytes($size) {
    $units = array(' B', ' KB', ' MB', ' GB', ' TB');
    for ($i = 0; $size >= 1024 && $i < 4; $i++) {
        $size /= 1024;
    }
    echo  round($size, 2) . $units[$i];
}



format_bytes(50000022);

echo "\n";
$c = imagecreate(5, 5);

echo $c;

ECHO gethostname();


?>
