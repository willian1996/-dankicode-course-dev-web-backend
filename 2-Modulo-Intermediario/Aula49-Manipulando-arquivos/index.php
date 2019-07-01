<?php
//if(file_exists('file.txt')){
//    echo "o arquivo existe";
//}


//vamos criar um arquivo novo
//$content = "Meu novo conteúdo criado atravez do php\r\n outra linha \r\n outra linha";
//file_put_contents('file.txt', $content);


//$content = file_get_contents('file.txt');

//echo nl2br($content);

$content = file_get_contents('https://cursos.dankicode.com');

echo $content;
