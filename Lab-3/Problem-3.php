<?php 
     $length=2;
     $width=2;

     $area=$length*$width;
     $perimeter=2*($length+$width);

     echo "Rectangle Area= $area<br>";
     echo "Rectangle Perimeter= $perimeter";

     if ($area==$perimeter) 
     {
     	echo "The shape is square";
     }
 ?>