<?php
//  array_merge serve para unir 2 ou mais arrays 
/*
$array1 = array("chave1"=>"valor1", "chave2"=>"valor2");
$array2 = array("chave3"=>"valor3", "chave4"=>"valor4");
$array3 = array("chave5"=>"valor5", "chave6"=>"valor6");

$result = array_merge($array1, $array2, $array3);
print_r($result);
*/

$arr = ["<p>Willian</p>", "Joao", "<h1>Fabricio,</h1>"];

 print_r(array_map("strip_tags",$arr));

