<?php

require_once("../source/connect.php");
$connectie = db_connect();

$sql = "SELECT * FROM sdg_cards"; 
$result = mysqli_query($connectie, $sql);


if ($result) {
while ($row = mysqli_fetch_assoc($result)){
    $image_path = $row['image_path']; 
    $id2 = $row['id'];
    echo '
    <figure class="groot-sdg">
            <a href="'.$template .'?sdg='. $id2 .'">
            <img class="groot-sdg_img sdg" src= ' . $image_path .' "alt="SDG Image" ' . $sdgNummer . '>
            </a>
        </figure>';
}
}


