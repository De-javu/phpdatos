<?php

// Alterar

$text = "PHP es UN LENGUAJE, año 2020, programacion<br>";

// Convierte el texto en minuscula
echo strtolower($text);


// Convierte el texto en minuscula
echo strtoupper($text);

// Pone la primer letra en mayuscula
echo ucfirst($text);

// Pone la primer letra en minuscula
echo lcfirst($text);


/* Remplazar */
//con esta funcion podemos Remplazar lo que se desee 
$slug = str_replace(' ', '-', $text);
echo strtolower($slug);


//Modificacion

//utilizams rellenar la informacion con el simbolo numeral 
$code = 39;
echo str_pad($code, 8, '#', STR_PAD_LEFT);

echo strip_tags($text);


//Elementos 

// con estos codigo podemos poner la informacion estandar en mayuscula o demas cosas
echo strtoupper($text); //monobyte
echo mb_strtoupper($text); // multibyte
