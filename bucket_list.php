<?php

echo "Hoeveel activiteiten wil je toevoegen?\n";
$a = readline();
$d = "Wat wil je toevoegen aan jouw bucket list?\n";
$bucketlist = [];
if (is_numeric($a)) {
    for ($x = 1; $x <= $a; $x++) {
        echo $d;
        $c = readline();
        array_push($bucketlist, $c);
    }
} else {
    echo "'$a' is geen getal, probeer het opnieuw";
    exit;
}

foreach ($bucketlist as $z) {
    echo "Op jouw bucket list staat:\n";
    echo $z;
    echo "\n";
}
?>