<?php

$input = array(13,14);
$reverse = array();

reverseInteger($input,$reverse);
// echo "total ";
// computeReverseSum($reverse);

function reverseInteger($input,$reverse)
{
    $total = 0;
    for($i=0;$i<count($input);$i++){
        $temp = (string)$input[$i];
        $rev = strrev($temp);
        $intrev = (int)$rev;
        array_push($reverse,$intrev);
        echo "$reverse[$i] ";
        $total = $total+$reverse[$i];
    }

    echo "<br>";
    echo "total: $total";
    
}

// function computeReverseSum($reverse)
// {
//     $total = 0;
//     for($i=0; $i < count($reverse); $i++)
//     {
//         echo $reverse[$i];
//     }
//     echo $total;
// }
?>