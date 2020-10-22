<?php
include_once 'connect.php';
    if ($sql = $conn->prepare( "
    SELECT kategorie, nr_kursu, data_rozpoczecia, data_zakonczenia, miejsce_kursu, ulica, miejscowosc, kod_pocztowy, uwagi, komentarz from kurs
"))
{
$sql->execute(); //wykonaj SQL
$sql->bind_result($kategorie, $nr_kursu, $data_rozpoczecia, $data_zakonczenia, $miejsce_kursu, $ulica, $miejscowosc, $kod_pocztowy, $uwagi, $komentarz );
while ($sql->fetch())
  $tabJSON[] = array(
     "kategorie" => $kategorie,
     "nr_kursu" => $nr_kursu,
     "data_rozpoczecia" => $data_rozpoczecia,
     "data_zakonczenia" => $data_zakonczenia,
     "miejsce_kursu" => $miejsce_kursu,
     "ulica" => $ulica,
     "miejscowosc" => $miejscowosc,
     "kod_pocztowy" => $kod_pocztowy,
     "uwagi" => $uwagi,
     "komentarz" => $komentarz
   ); //dla każdej kolumny wynikowej
$sql->close();
}
    echo json_encode($tabJSON, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>
