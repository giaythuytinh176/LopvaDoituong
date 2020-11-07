<?php

include_once "Fan.php";

$fan1 = new Fan();
$fan1->setSpeed($fan1::FAST);
$fan1->setRadius(10);
$fan1->setColor("yellow");
$fan1->setOn(true);

print("<pre>" . print_r($fan1->toString(), true) . "</pre>");


$fan2 = new Fan();
$fan1->setSpeed($fan1::MEDIUM);
$fan1->setRadius(5);
$fan1->setColor("blue");
$fan1->setOn(false);



print("<pre>" . print_r($fan2->toString(), true) . "</pre>");
