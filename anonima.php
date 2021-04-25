<?php

function greet(closure $lang, $name)
{
    return $lang($name);
}

$es = function ($name)
{
    return "hola, $name";
};

$en =function ($name)
{
    return "Hello, $name";
};
echo greet($en, 'Lynda');