<?php

declare(strict_types=1);
error_reporting(1);

# Start Variable Functions Example

function sum(int ...$numbers):int{
    return array_sum($numbers);
}

// normal function calling
echo sum(1,2,3,4);
echo "<br />";

// creating variable function and using
$x = 'sum';
if(is_callable($x)){
echo $x(1,2,3,4);
}else{
    echo "Variable is not a 'variable function'";
}
echo "<br />";

# End of Variable Functions Example

#Start Anonymous Functions Example

$anonymous = function (int ...$numbers):int{
    return array_sum($numbers);
};

echo $anonymous(5,6,7);
echo "<br />";

$x = 10;

$anonymous = function (int ...$numbers)use ($x):int{
    $x =20;
    return array_sum($numbers) + $x;
};

echo $anonymous(5,6,7);
echo "<br />";

// Note that the value of parsed variable into the anonymous function does not change
echo $x;
echo "<br />";

$x1 = 10;

// But when parsed by reference it does

$anonymous1 = function (int ...$numbers)use (&$x1):int{
    $x = 30;
    return array_sum($numbers) + $x;
};

echo $anonymous1(8,9,10);
echo "<br />";

// Note that the value of parsed variable into the anonymous function does not change
echo $x1;
echo "<br />";


#Start Anonymous Functions Example

# Start Arrow Functions

$array = [1,2,3,4];

$y = 10;

$array2 = array_map(fn($number)=>$number*$number+ ++$y, $array);
echo "<pre>";
print_r($array2);
echo "</pre>";

// Note that the value of why never changes;

echo $y;

# Start Arrow Functions