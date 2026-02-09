<?php
require $_SERVER['DOCUMENT_ROOT'] . '\config\bdd.php';


$formulaire_valid= true;
//validation du titre
if(empty($_POST['titre'])){
    $formulaire_valid = false;
}else{
    $titre=htmlspecialchars($_POST['titre']);
}

//validation de l'artiste
if(empty($_POST['artiste'])){
    $formulaire_valid = false;
}else{
    $artiste=htmlspecialchars($_POST['artiste']);
}

//validation de la description
if(empty($_POST['description']) || strlen($_POST['description']) <= 3){
    $formulaire_valid = false;
}else{
    $description=htmlspecialchars($_POST['description']);
}

//validation de l'image
if(empty($_POST['image']) || !filter_var($_POST['image'], FILTER_VALIDATE_URL)){
    $formulaire_valid = false;
}else{
    $image=htmlspecialchars($_POST['image']);
}    

if ($formulaire_valid){
    //insere les données dans la bdd

    //redirige vers la page d'accueil avec le message de succès
    header('Location: index.php?success=1');
}else{
    //redirige vers le formulaire avec un message d'erreur
    header('Location: ajouter.php?error=1');
}
?>