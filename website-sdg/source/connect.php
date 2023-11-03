<?php
function db_connect() {
    $envSettings = [];
    if (file_exists('../source/.env')) {
        $envSettings = parse_ini_file('../source/.env');

        $conn = mysqli_connect($envSettings["DB_HOST"], $envSettings["DB_USER"], $envSettings["DB_PASSWORD"], $envSettings["DB_NAME"]);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
    } else {
        echo "no .env";
    }
}
