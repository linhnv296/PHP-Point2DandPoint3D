<?php
include_once 'Point2D.php';
include_once 'Point3D.php';

$point = new Point2D(10, 20);
print_r ($point->getXY());
echo "<br>";
echo $point->toString();

$poit3d = new Point3D(4,5,6);
$poit3d->getXYZ();
echo "<br>";
echo $poit3d->toString();