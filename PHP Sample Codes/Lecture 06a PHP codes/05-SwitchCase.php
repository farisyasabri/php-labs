<?php

$artType = "PT";

//program control - switch...case
switch ($artType) {
   case "PT":
        $output = "Painting";
        break;
    case "SC":
        $output = "Sculpture";
        break;
    default:
        $output = "Other";
}

// equivalent if...else
if ($artType == "PT")
    $output2 = "Painting";
else if ($artType == "SC")
    $output2 = "Sculpture";
else
    $output2 = "Other";


//extra line for demo
echo $output . " - " . $output2;
?>