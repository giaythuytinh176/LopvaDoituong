<?php

class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    function getA()
    {
        return $this->a;
    }

    function getB()
    {
        return $this->b;
    }

    function getC()
    {
        return $this->c;
    }

    function getDiscriminant()
    {
        $delta = pow($this->b, 2) - 4 * $this->a * $this->c;
        return $delta;
    }

    function getRoot1()
    {
        $x1 = (-$this->b + sqrt($this->getDiscriminant())) / (2 * $this->a);
        return $x1;
    }

    function getRoot2()
    {
        $x2 = (-$this->b - sqrt($this->getDiscriminant())) / (2 * $this->a);
        return $x2;
    }


}