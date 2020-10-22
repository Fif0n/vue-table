<?php
    $serverName = 'localhost';
    $user = 'root';
    $passwd = '';
    $db = 'kurs';

    $conn = mysqli_connect($serverName, $user, $passwd, $db);

    if(!$conn){
        die('Błąd połączenia'.mysqli_connect_error());
    }