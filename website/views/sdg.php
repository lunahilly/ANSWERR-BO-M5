<?php

require_once("../source/connect.php");

$nummerlijst = range(1, 17);
shuffle($nummerlijst);

$connectie = db_connect();

for ($i = 0; $i < 3; $i++){
    $sdgNummer = $nummerlijst[$i];

    // Aanpassing: Haal de afbeelding op uit de database
    $sql = "SELECT image_path FROM sdg_cards WHERE id = $sdgNummer";
    $result = mysqli_query($connectie, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $image_path = $row['image_path'];

        echo "
        <figure class='groot-sdg'>
            <img class='groot-sdg_img' src='$image_path' alt='SDG Image $sdgNummer'>
        </figure>";


        mysqli_free_result($result);

    } else {
        echo "Fout bij het uitvoeren van de databasequery.";
    }
}