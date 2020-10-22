<?php
    if(isset($_POST['submit-course'])){
        include_once 'connect.php';
        $kategoria = $_POST['kat'];
        $nr_kursu = $_POST['nrkursu'];
        $data_rozpoczecia = !empty($_POST['datastart']) ? "".date('Y-m-d', strtotime($_POST['datastart']))."" : NULL;
        $data_zakonczenia = !empty($_POST['datakoniec']) ? "".date('Y-m-d', strtotime($_POST['datakoniec']))."" : NULL;
        $miejsce_kursu = !empty($_POST['miejsce']) ? "".$_POST['miejsce']."" : NULL;
        $ulica = !empty($_POST['ul']) ? "".$_POST['ul']."" : NULL;
        $miejscowosc = !empty($_POST['miejscowosc']) ? "".$_POST['miejscowosc']."" : NULL;
        $kod_pocztowy = !empty($_POST['kod'])  ? "".$_POST['kod']."" : NULL;
        $uwagi = !empty($_POST['uwagi']) ? "".$_POST['uwagi']."" : NULL;
        $komentarz = !empty($_POST['kom']) ? "".$_POST['kom']."" : NULL;
        echo $kategoria .$nr_kursu. $data_rozpoczecia. $data_zakonczenia. $miejsce_kursu. $ulica. $miejscowosc. $kod_pocztowy. $uwagi. $komentarz;

        $sql = $conn->prepare("INSERT INTO kurs VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
        if($sql){
            $sql->bind_param("sissssssss", $kategoria, $nr_kursu, $data_rozpoczecia, $data_zakonczenia, $miejsce_kursu, $ulica, $miejscowosc, $kod_pocztowy, $uwagi, $komentarz);
            $sql->execute();
            $sql->close();
        } else {
            die();
        }
        $conn->close();
        header("Location: ../index.php");
    }
header("Location: ../index.php");
?>