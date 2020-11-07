<?php


class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = date('Y-M-d h:m:s');
    }

    public function start()
    {
        $this->startTime = date('Y-M-d h:m:s');
    }

    public function stop()
    {
        $this->endTime = date('Y-M-d h:m:s');
    }

    public function getElapsedTime()
    {
        $milliseconds = round(microtime(true) * 1000);
       // echo strtotime($this->startTime);
        return $milliseconds;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param mixed $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    /**
     * @param mixed $startTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }


}