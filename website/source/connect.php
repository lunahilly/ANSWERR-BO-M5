<?php
function db_connect() {
    $envSettings = [];
    if (file_exists('../source/.env')) {
        $envSettings = parse_ini_file('../source/.env');

        $conn = mysqli_connect($envSettings["DB_NAME"], $envSettings["DB_USER"], $envSettings["DB_PASSWORD"], $envSettings["DB_HOST"]);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
        mysqli_close();
    }
}

