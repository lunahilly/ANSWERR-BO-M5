<?php
function kutphp(){
    $sdg = $_GET['sdg'];

    require_once("../source/connect.php");
    $connection = db_connect();

    $sql = "SELECT * FROM sdg_cards WHERE id = ?";
    $stmt = $connection->prepare($sql);

    if ($stmt){

        $stmt->bind_param("i", $sdg);
        $stmt->execute();

        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()){
    
            $id = $row['id'];
            $titles = $row['title'];
            $subtexts = $row['subtext'];
            $info_texts = $row['info_text'];
            $image_paths = $row['image_path'];

        }

        $stmt->close();
    }   

    else{
        die("Error in SQL statement: " . $connection->error);
    }

    echo'
    <section class="SDG">
        <img src="'.$image_paths.'" alt="SDG">
        <article class="SDG-description">
            <h1>'.$titles.'</h1>
            <p>'.$info_texts.'</p>
        </article>
    </section>';
}