<?php

$hostname = 'localhost';

$username = 'gilberlu';

$password = 'gilberlu';

try {
    $connect = new PDO("mysql:host=$hostname;dbname=gilberlu", $username, $password);
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

?>