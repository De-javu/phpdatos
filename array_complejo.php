<?php   


/* array complejo */

$courses = [
    'frontend' => 'javascript',
    'framrwork' => 'larvel',
    'backend' => 'php'
];

//funcion caminar enel array

function upper($course, $kay)
{
    echo strtoupper($course) . ": $kay <br> ";
}


//con esta funcion recorremos todos los elementos envia  upper y upper procesa los elementos 

array_walk($courses, 'upper');