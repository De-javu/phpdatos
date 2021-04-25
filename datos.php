<?php
/* Esta es la forma como escribimos un dato y lo imprimos
*como un arreglo, recorriendo cada caracter
*/
$data =  "Estudio PHP <br>";
echo $data [0];
echo $data [1] ;

/* En este ejemplo utilizamos la funcion substr que nos permite listar
*solo la cantidad de caracteres que queremos ver en pantalla*/
$post = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit corporis odio cumque. Sunt autem officiis molestiae dolorum ratione perferendis suscipit explicabo alias commodi, similique omnis possimus sint ex. Totam, cupiditate!';
$extract = substr($post, 0, 20);

echo "$extract... [Ver mas] <br>";

/* Esta es otra funcion de como podemos 
listar la informacion de array a string*/
$info = 'javascript, php, laravel'; 
$tags = explode(', ', $info);    // El array
echo "<pre>";
var_dump($tags);//  solo para los array

/* aca a ahora vamos a generar un un listado
*de strig a array osea la funcion inversa del
*ejercicio ayer*/
$courses = ['javascript', 'php', 'laravel <br>' ];
echo implode(',', $courses);

/* En este ejmpo trabajamos con la funcion trim que nos permite 
*recojer los espacios los que utlizamos de mas y vemos tambien
*otra forma de imprimir concatenando la varable */
$Modulos = "   Curso de PHP   ";
$Modulos = trim($Modulos);
echo "<pre>";
echo "Quiero aprender $Modulos, y otro texto";


