<?php
function kutphp(){
    $sdg = $_GET['sdg'];

    require_once("../source/connect.php");
    $connection = db_connect();

    $stmt = $connection->prepare("SELECT * FROM sdg_cards WHERE id = ?");
    $stmt->bind_param("i", $sdg);
    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows > 0){

        while ($row = $result->fetch_assoc()){
    
            $id = $row['id'];
            $titles = $row['title'];
            $subtexts = $row['subtext'];
            $info_texts = $row['info_text'];
            $image_paths = $row['image_path'];

        }
    echo'
    <h1>'.$titles.'</h1>
    <div class="container">
          <img class="img" src="'.$image_paths.'" alt="SDG">
      <div class="text">
          <h2 class="container__h2">'.$subtexts.'</h2>
          <p class="container__p">'.$info_texts.'</p>
      </div>';
}
    else{
        echo "No SDG found with id: " . $sdg;
    }

$stmt->close();
$connection->close();
}     