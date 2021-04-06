<?php
$number = 1;
while ($number <= 10) {
        echo $number . " ";
        if ($number === 8) {
                echo "ends the execution of loop.";
                break;
        }
        $number++;
}
//outputs
// 1 2 3 4 5 6 7 8 ends the execution of loop.