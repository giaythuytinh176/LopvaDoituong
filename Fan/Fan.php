<?php


class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private $speed = self::SLOW;
    private $on = false;
    private $radius = 5;
    private $color = "blue";

    public function __construct()
    {
    }

    public function toString()
    {
        if ($this->on) {
            return "speed=" . $this->speed . ",color=" . $this->color . ",radius=" . $this->radius . ",fan is on";
        } else {
            return "color=" . $this->color . ",radius=" . $this->radius . ",fan is off";
        }
    }

    /**
     * @return logic
     */
    public function getOn()
    {
        return $this->on;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param bool $on
     */
    public function setOn($on)
    {
        $this->on = $on;
    }

    /**
     * @param int $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }


}