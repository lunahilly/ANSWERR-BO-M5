<?php
require_once("../source/connect.php");
$conn = db_connect();
$query = "SELECT * FROM sdg_cards";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$titles = [];
$subtexts = [];
$info_texts = [];
$image_paths = [];

while ($row = mysqli_fetch_assoc($result)) {
  $titles = $row['title'];
  $subtexts = $row['subtext'];
  $info_texts = $row['info_text'];
  $image_paths = $row['image_path'];
}

echo '<img src="'.$image_paths.'">';