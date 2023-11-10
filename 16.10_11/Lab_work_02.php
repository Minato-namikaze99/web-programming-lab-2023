<?php
    function prime_check($number)
    {
        if ($number ==1)
        {
    return false;
        }
        for ($i =2; $i<=$number/2;$i++)
        {
            if ($number%$i==0)
            {
                return false;
            }

            return true;
        }
    }
    $number=30;
    if (prime_check($number))
    {
        echo "$number is prime number";
    }
    else{
        echo " Not prime";
    }

?>