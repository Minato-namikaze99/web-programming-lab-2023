<?php

function check($number) {
    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}

$number = -10; 


echo "The number is ". check($number);

?>
