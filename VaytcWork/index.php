<?php

spl_autoload_register(function ($class) {
    require __DIR__ . DIRECTORY_SEPARATOR . implode(
        DIRECTORY_SEPARATOR,
        explode('\\', str_replace('VaytcWork', '', $class))
    ) . '.php';
});


$student = new Student(
$gruppa = new Gruppa("ISP", new DateTime('2022-01-01'), "Tanya"), 
new DateTime('2022-01-01'),
"Андреас", 
"Вайц", 
new DateTime('2022-01-01'), 
"Мужской");
echo $student->getFirstName();
echo " ";
echo $gruppa->getSpecialnost();
