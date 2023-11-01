<?php
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);
    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
} 

require_once("../source/connect.php");
$connectie = db_connect();

$sql = "SELECT image_path FROM sdg_cards";
$result = mysqli_query($connectie, $sql);


if ($result) {
while ($row = mysqli_fetch_assoc($result)){
    $image_path = $row['image_path']; 
    echo '
    <figure class="groot-sdg">
            <a href="'.$template .'?sdg='. $id .'">
            <img class="groot-sdg_img" src= ' . $image_path .' "alt="SDG Image" ' . $sdgNummer . '>
            </a>
        </figure>';
}
}

