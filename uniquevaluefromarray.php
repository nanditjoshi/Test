
<?php
// PHP program to print all distinct
// elements in a given array

function printDistinct($arr, $n)
{
    // Pick all elements one by one
    for($i = 0; $i < $n; $i++)
    {

        // Check if the picked element
        // is already printed
        $j;
        for($j = 0; $j < $i; $j++)
        if ($arr[$i] == $arr[$j])
            break;

        // If not printed
        // earlier, then print it
        if ($i == $j)
        echo $arr[$i] , " ";
    }
}

    // Driver Code
    $arr = array(6, 10, 5, 4, 9, 120, 4, 6, 10);
    $n = sizeof($arr);
    printDistinct($arr, $n);

// This code is contributed by nitin mittal
?>
