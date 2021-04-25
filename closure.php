<?php


/* Creamos un a funcion anonima */

$greet = function ($name) //variables que requieren logica 
{
   return "hola,$name";
};

echo $greet('Andres');