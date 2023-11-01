<?php

require_once("../source/connect.php");

$nummerlijst = range(1, 17);
shuffle($nummerlijst);

$connectie = db_connect();

for ($i = 0; $i < 3; $i++){
    $sdgNummer = $nummerlijst[$i];

    // Aanpassing: Haal de afbeelding op uit de database
    $sql = "SELECT * FROM sdg_cards WHERE id = $sdgNummer";
    $result = mysqli_query($connectie, $sql);

while ($row = mysqli_fetch_assoc($result)){

    $id = $row['id'];
    $titles = $row['title'];
    $subtexts = $row['subtext'];
    $info_texts = $row['info_text'];
    $image_paths = $row['image_path'];

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        $template = "./views/themplate.php";

        echo '
        <figure class="groot-sdg">
            <a href="'.$template .'?sdg='. $id .'">
            <img class="groot-sdg_img" src="./'.$image_paths.'" alt="SDG Image $sdgNummer">
            </a>
        </figure>';
    }

    
    else {
        echo "Fout bij het uitvoeren van de databasequery.";
    }
}}