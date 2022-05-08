<?php

//program control - if ... else

//The PHP date() function is used to format a date and/or a time.
//https://www.w3schools.com/php/php_date.asp
//https://www.php.net/manual/en/timezones.php
date_default_timezone_set("Asia/Kuala_Lumpur");
$hourOfDay = date("H"); //H - 24-hour format of an hour (00 to 23)
echo $hourOfDay;

// if statement with condition
if ( $hourOfDay > 6 && $hourOfDay < 12 ) {
    $greeting = "\n Good Morning";
}
else if ($hourOfDay == 12) { // optional else if
    $greeting = "\n Good Noon Time";
}
else { // optional else branch
    $greeting = "\n Good Afternoon or Evening";
}

//extra line to show output.
echo $greeting;
?>