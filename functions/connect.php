<?php
    $serverName = 'localhost';
    $user = 'root';
    $passwd = '';
    $db = 'pracownicy';

    $conn = mysqli_connect($serverName, $user, $passwd, $db);

    if(!$conn){
        die('Błąd połączenia'.mysqli_connect_error());
    }