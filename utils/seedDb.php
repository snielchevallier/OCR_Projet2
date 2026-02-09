<?php
//fichier pour enregistrer les données de oeuvres.php dans la base de données
 require $_SERVER['DOCUMENT_ROOT'] . '\oeuvres.php';
 require $_SERVER['DOCUMENT_ROOT'] . '\config\bdd.php';

 foreach($oeuvres as $oeuvre){
    $sql="INSERT INTO oeuvres (titre, description, artiste, image) VALUES ('".htmlspecialchars($oeuvre['titre'])."','".htmlspecialchars($oeuvre['description'])."','".htmlspecialchars($oeuvre['artiste'])."','".htmlspecialchars($oeuvre['image'])."')";
    echo "Inserting: " . $oeuvre['titre'] . "<br>";
    echo "SQL: " . $sql . "<br><br>";

    $conn = connexion();
    if ($conn) {   
        try {
            $conn->exec($sql);
            echo "Oeuvre enregistrée: " . $oeuvre['titre'] . "<br><br>";
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage() . "<br><br>";
        }
    }   
 }

?>