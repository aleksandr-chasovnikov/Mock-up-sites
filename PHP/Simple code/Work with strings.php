<?php 

$city = "Лондон";
$percent = 22/41 * 100;
$total = 1000;

$format = 'По данным статистики %2$.4f из %1$d проживают в %3$s';

print_f($format, $percent, $total, $city); //Подставляет переменные в строку и выводит на экран

sprintf(format); // -//-, но не выводит на экран