<?php


class Point2D
{
    public $x;
    public $y;
    public $arr = [];
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }
    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY()
    {
        array_push($this->arr, $this->x, $this->y);
        return $this->arr;
    }
    public function toString()
    {
        return "X: ".$this->arr[0]." Y: ".$this->arr[1];
    }
}