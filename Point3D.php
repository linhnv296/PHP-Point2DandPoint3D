<?php


class Point3D extends Point2D
{
    public $z;
    public function __construct($x,$y,$z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }

    public function setXYZ($x, $y,$z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function getXYZ()
    {
        array_push($this->arr, $this->x, $this->y, $this->z);
        return $this->arr;
    }
    public function toString()
    {
        return "X: ".$this->arr[0]." Y: ".$this->arr[1]." Z:". $this->arr[2];
    }
}