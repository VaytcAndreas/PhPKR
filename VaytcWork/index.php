<?php

require_once "C:\openserver\domains\PhPKR\college\VaytcWork\Student.php";

use College\VaytcWork\Gruppa;
use College\VaytcWork\Student;

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