<?php

require_once 'config.php';


$pdo->exec("LOCK TABLES clientes WRITE");


sleep(10);