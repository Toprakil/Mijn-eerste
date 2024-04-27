<?php
/**
 * Created by PhpStorm.
 * User: Toprak ilhan
 * Date: 15-02-2024
 * Time: 09:29
 */
echo "Hello World! \r\n";
echo " \r\n";

//Opdracht-01:
echo "Opdracht-01: \r\n";
if (2 > 0) {
    echo "2 is is groter dan 0 \r\n";
}
echo " \r\n";       //lege regel

//Opdracht-02:
echo "Opdracht-02: \r\n";
$a = 9;
if ($a >= 0 && $a <= 10) {
    echo $a, " zit tussen de 0 en de 10 \r\n";
}
echo " \r\n";


//Opdracht-03:
echo "Opdracht-03: \r\n";
$b = 7;
if ($b >= 0 and $b <= 10) {
    if ($b < 6) {
        echo $b, " is een onvoldoende. \r\n";
    } else {
        echo $b, " is een voldoende. \r\n";
    }
} else {
    echo $b, " is niet tussen 0 en 10 \r\n";
}
echo " \r\n";


//Opdracht-04:
echo "Opdracht-04: \r\n";
for ($i = 1; $i <= 10; $i += 2) {
    echo $i , " \r\n";
}
echo " \r\n";

//Opdracht-05:
echo "Opdracht-05: \r\n";
$nummer = 7;
echo "De tafel van $nummer is:\n";

for ($i = 1; $i <= 10; $i++) {
    $resultaat = $nummer * $i;
    echo "$nummer x $i = $resultaat\n";
}
echo " \r\n";


//Opdracht-06:
echo "Opdracht-06: \r\n";
$a = 0;
$b = 1;

echo "Fibonacci reeks onder 1000:\n";

while ($a <= 1000) {
    echo $a . " ";

    $tijdelijk = $a + $b;
    $a = $b;
    $b = $tijdelijk;
}
echo " \r\n";
echo " \r\n";


?>


