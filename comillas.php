<?php
/* 
echo 'U texto de una linea 
varias lineas
comillas simples \ backslash \\ continuar con mas textos'; */



/* Esta la practica con comilla dobles ""  */
$name = 'Andres';
$firs_name = 'Pardo';
echo "Mi nombre es $name $firs_name <br>";

/* Esta es la practica con comillas '' simples toca concatenar */
$name = 'Andres';
echo 'Mi nombre es ' .  $name; 

/* Esta es la forma como ponemos arreglos y vemos como necesitamos
los corchetes para que pueda analizar los datos complejos que maneja 
la variable que lleva el arreglo en posicion 0, en este caso PHP que es lo que
veremos en pantalla */
$courses =[
    'backend' => [
        'PHP',
        'LARAVEL'
     ]
    ];

    echo "{$courses ['backend'] [0]} <br>";

   
   
    /*creamos una clase*/ 
    class User
    {
        public $variable = 'sthefy';
    }
 
    // Aca creamos el objeto para la clase
    $user = new User;

    //Este es el texto que va imprimir de la configuracion de la clase
    echo "$user->variable quiere aprender {$courses ['backend'] [0]} <br>";



    /* Ahora vamos a realizar un apueba de variables variables
    * en esta prueba vimos que la variable dinamica de tuliana para llamarla 
    * desde la variable teacher toco encerrarla en los corchetes {},
    * de esta forma la evalua como una funcion especial.
    */
     
    $teacher = 'Yuliana';
    $Yuliana =   'Profesora de salsa';
    echo "$teacher es ${$teacher} <br>";


    /*Ejemplo estrucutura compleja*/
     

    function getTeacher()
     {
         return 'teacher';
     }

     $teacher = 'Pepa';

     echo "{${getTeacher()}} Profesora de perrirtos";