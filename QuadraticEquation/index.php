<?php

require "QuadraticEquation.php";

$solveEqua = new QuadraticEquation(1, -11, 4);

if ($solveEqua->getDiscriminant() > 0) {

    echo "pt co nghiem x1 = " . $solveEqua->getRoot1() . "<br>";
    echo "pt co nghiem x2 = " . $solveEqua->getRoot2();

} elseif ($solveEqua->getDiscriminant() == 0) {
    echo "pt co nghiem x1 = x2 = " . $solveEqua->getRoot1();
} else {
    echo "pt vo nghiem";
}
echo "<br>";

var_dump($solveEqua->getDiscriminant());