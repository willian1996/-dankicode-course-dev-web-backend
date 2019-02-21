<?php

//tipos de array em php
$arr = ['guilherme', 'willian'];

$arr = array('willian', 'paulo', 'joao');

$arr[0] = 'willian';
$arr[] = 'joao';

//array multidimensional
$arr2 = array(array("Willian", "Joao"), array(23, 45));

var_dump($arr2);

echo "<hr>";

echo $arr2[1][0];