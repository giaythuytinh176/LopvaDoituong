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

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @return mixed
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * @param mixed $a
     */
    public function setA($a)
    {
        $this->a = $a;
    }

    /**
     * @param mixed $b
     */
    public function setB($b)
    {
        $this->b = $b;
    }

    /**
     * @param mixed $c
     */
    public function setC($c)
    {
        $this->c = $c;
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