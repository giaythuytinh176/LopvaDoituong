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

    function swap_positions($arr, $left, $right)
    {
        $backup_arr_right = $arr[$right];
        $arr[$right] = $arr[$left];
        $arr[$left] = $backup_arr_right;
        return $arr;
    } // asort;

    function selection_sort($arr)
    {
        for ($i = 0; $i < count($arr) - 1; $i++) {
            $min = $i;
            for ($j = $i + 1; $j < count($arr); $j++) {
                if ($arr[$j] < $arr[$min]) {
                    $min = $j;
                }
            }
            $arr = $this->swap_positions($arr, $i, $min);
        }
        return $arr;
    }

    function mstoDate($ms)
    {
        $date = [];
        $date['ms'] = $ms;
        $date['second'] = $ms / 1000;
        $date['minutes'] = $date['second'] / 60;
        $date['hour'] = $date['minutes'] / 3600;
        $date['day'] = $date['hour'] / 8600;
        return $date;
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