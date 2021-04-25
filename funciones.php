<?php
// Se realizo el ejemplo de funciones y la funcion sort que nos permite relizar ordenes especificos 
$courses = [
    10 => 'php', 
    100 => 'javascript', 
    1000 => 'laravel'
];


krsort($courses);
 

echo "<pre>";
var_dump($courses);