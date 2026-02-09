<?php
//fonction qui va créer la connection à la db
function connexion() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ocr_projet2";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}
?>