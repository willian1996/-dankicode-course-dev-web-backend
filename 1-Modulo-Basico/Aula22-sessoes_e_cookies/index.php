<?php
session_start();

//$_SESSION['nome'] = "Willian";

setcookie("nome", "Willian", time() - (60*60*24),'/');

echo $_COOKIE['nome'];

?>