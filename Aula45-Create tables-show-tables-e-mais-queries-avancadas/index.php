<?php
require_once 'config.php';

/*
$tables = $pdo->query("SHOW TABLES");
$tables = $tables->fetchAll();

echo "<pre>";
print_r($tables);
echo "</pre>";
*/

$sql = "CREATE TABLE cursos(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome_curso VARCHAR(30) NOT NULL
)";

$pdo->exec($sql);



