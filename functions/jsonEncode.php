<?php
    header('Access-Control-Allow-Origin: *');
    include 'connect.php';
    $sql = "SELECT * FROM pracownicy";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $pracownicy[] = array(
                "id" => $row['ID'],
                "name" => $row['Name'],
                "last_name" => $row['Last_name'],
                "age" => $row['Age'],
                "active" => $row['Active']
            );
        }
    }
    echo json_encode($pracownicy, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);