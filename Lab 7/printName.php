<?php

function printName($firstName, $lastName, $number){
    for($i=0;$i<$number;$i++){
        echo "$firstName $lastName <br>";
    }
}

printName("John","Smith",10);

?>
