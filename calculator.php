<?php
  
    $op = readline("");
    $num1 = readline("");
    $num2 = readline("");  

if (is_numeric($num1)) {
} else {
    echo "geen getal";
}


if (is_numeric($num2)) {
} else {
    echo "geen getal";
}

if ($op == "+") {
    echo $num1 + $num2;
} elseif ($op == "-") {
    echo $num1 - $num2;
} elseif ($op == "%") {
    echo $num1 % $num2; 
} else {
    echo "geen geldige operatie";
}

?>