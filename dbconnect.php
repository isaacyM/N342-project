<?php
    $hostname = 'localhost';
    $username = 'gilberlu';
    $password = 'gilberlu';

    try 
    {
        $connect = new PDO("mysql:host=$hostname;dbname=gilberlu_db", $username, $password);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
?>