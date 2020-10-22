<?php
include_once 'connect.php';
    if($sql = $conn->prepare("SELECT kategorie FROM kategorie")){
        $sql->execute();
        $sql->bind_result($kategorie);
        while($sql->fetch()){
            $katJSON[] = array(
                "value" => $kategorie,
                "text" => $kategorie
            );
            
        }
    }
    $sql->close();
    echo json_encode($katJSON, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);