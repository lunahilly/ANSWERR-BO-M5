<?php
function db_connect() {
    $envSettings = [];
    if (file_exists('../source/.env')) {
        $envSettings = parse_ini_file('../source/.env');

        $conn = new mysqli($envSettings["DB_HOST"], $envSettings["DB_USER"], $envSettings["DB_PASSWORD"], $envSettings["DB_NAME"]);

        if ($conn -> connect_errno) {
            echo "Failed to connect to MySQL: " . $conn -> connect_error;
            exit();
        }

        return $conn;
    }
}

