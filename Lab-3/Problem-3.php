<?php 
     $length=0;
     $width=0;

     $area=$length*$width;
     $perimeter=2*($length+$width);

     echo "Rectangle Area= $area<br>";
     echo "Rectangle Perimeter= $perimeter<br>";

     if ($area==$perimeter) 
     {
     	echo "The shape is square";
     }
 ?>