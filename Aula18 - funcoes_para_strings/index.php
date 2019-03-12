<?php

$conteudo = "Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.";


//recortar uma strind
echo substr($conteudo, 0, 20);



echo "<hr>";//-------------------------------------



$nome = "Willian Sales Gabriel";

//explode transforma uma string em array separando os indices  
$nomes = explode(' ', $nome);

print_r($nomes);

echo "<hr>";//--------------------------------------
//transforma um array em uma string juntando os indices 
$nomes = implode(' ', $nomes);

echo $nomes;



















