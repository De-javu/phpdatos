<?php

$courses = ['javascrip', 'php', 'laravel'];
$categories = ['front', 'back', 'framework'];

echo "<pre>";
var_dump(array_combine($categories, $courses));