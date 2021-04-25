<?php

$courses = [
       'backend' => 'php',
       'frontend' => 'javascript'
];

echo "<pre>";

var_dump(array_unshift($courses));

// array_slice    Extrae una parte de un array.
// array_chunk    Divide un array en fragmentos.
// array_shift    Quita un elemento del principio del array
// array_pop      Extrae el último elemento del final del array.
// array_unshift  Añadir al inicio de un array uno a más elementos.
// array_push     Inserta uno o más elementos al final de un array.
// array_flip     Intercambia todas las claves de un array con sus valores asociados.