<?php

/**
* This function returns a nicely formatted string using the current
* system time. The showSeconds parameter controls whether or not to
* include the seconds in the returned string.
*/
function getNiceTime($showSeconds) {
    if ($showSeconds==true)
        return date("H:i:s");
    else
        return date("H:i");
}

echo " True: ";
echo getNiceTime(true); // this will print seconds
echo " - False: ";
echo getNiceTime(false); // will not print seconds

?>
