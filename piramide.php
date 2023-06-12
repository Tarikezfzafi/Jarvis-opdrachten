<?php

$n = readline('Hoeveel stapels wil je hebben?');
{
  
for ($i = 1; $i <= $n; $i++) {
    echo str_pad('', $i, '*') . PHP_EOL;     
}

}

?>