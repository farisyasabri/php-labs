<?php

$scores = array( 90, 98, 89, 100, 100, 86);

//compute average score
$total = 0;
for($i=0;$i<count($scores);$i++){
    $total = $total + $scores[$i];
}
$average = $total/count($scores);

echo "Average score is $average";
echo "<br>";
echo checkGrade($average);


function checkGrade($average)
{
    if($average>=80 && $average<=100){
        echo "Average grade is A";
    }
    else if($average>=60 && $average<=79){
        echo "Average grade is B";
    }
    else if($average>=40 && $average<=59){
        echo "Average grade is C";
    }
    else if($average>=20 && $average<=39){
        echo "Average grade is D";
    }
    else if($average>=1 && $average<=19){
        echo "Average grade is E";
    }
    else {
        echo "Average grade is F";
    }
}
?>