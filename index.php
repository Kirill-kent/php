﻿<?php
$a = 5;
$b = '05';
var_dump($a == $b);        // Сравнение по значению, тип не сравнивается
var_dump((int)'012345');     // Почему 12345? int- числовое значение, выводится с 1
var_dump((float)123.0 === (int)123.0); // Почему false? int-цедльное число, float-число с плавающей запятой, ===- строгое сравнение по типу и значению
var_dump((int)0 === (int)'hello, world'); // Почему true?  при сравнении строки с типом int получаем 0
?>



<?php
$a = 1;
$b = 2;

$a += $b;
$b = $a - $b;
$a -= $b;
var_dump($a); // 2
var_dump($b); // 1
?>

