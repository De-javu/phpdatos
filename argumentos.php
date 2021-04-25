<?php

// // Iniciamos con una funcio

// // Este es el ejemplo de valore 
// function greet($name)
// {
//     return "Hola, $name";
// }

// echo greet ('Andres');


// Ejemplo de Referencias

$course = 'PHP';
function path($course)
{
    $course = 'Laravel';
    echo $course;
}

path($course);
echo($course);



// Ejemplo para predeterminado

function greet ($name = 'Italo')
{
    return "Hola, $name";
}

echo greet();
echo greet('Abel');



