<?php
/**
 * Created by PhpStorm.
 * User: deval
 * Date: 20-05-19
 * Time: 23:16
 */
include_once 'form/connect.php';


echo '<!doctype html>
    <html lang="en">
     <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CoreUI CSS -->
        <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">

        <title>ADMIN VERIF</title>
    </head>
    <body class="#" style="font-family: Poppins, sans-serif; background: #34495e;">';


//---------------------------------------------------------------------------------------------------------------------

//Affichage du formulaire INSERT
function formTableHome($lines){
    echo '<table class="table table-striped table-dark">';
    echo '<thead>';
    echo '<td scope="col">id</td>';
    echo '<td scope="col">TITRE</td>';
    echo '<td scope="col">TEXTE</td>';
    echo '<td scope="col">SLUG</td>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($lines as $line){

        echo '<tr>';
        echo '<td scope="row">'.$line['id'].'</td>';
        echo '<td>'.$line['titre'].'</td>';
        echo '<td>'.$line['texte'].'</td>';
        echo '<td>'.$line['slug'].'</td>';
        echo '<td><button type="button" class="btn btn-warning"><a href="?table=te_home_box&action=update&id='.$line['id'].'" style="color: #ffffff">Update</a></button></td>';
        echo '<td><button type="button" class="btn btn-danger"><a href="?table=te_home_box&action=delete&id='.$line['id'].'" style="color: #ffffff">Delete</a></button></td>';
        echo '</tr>';
    }
    echo '<tbody>';
    echo '</table>';
}
//Affichage du formulaire UPDATE
function formTableHome2($db){
    $id = $_GET['id'];
    $request="SELECT * FROM `te_home_box` WHERE `id` = $id";
    $reponse=crudDb($db,$request);
    $lines = $reponse->fetchAll();


    foreach($lines as $line) {
        echo '<form method="post" action"">';
        echo '<div class="form-group">';
        echo '<label for="titre" style="color: #ffffff">Titre</label>';
        echo '<input type="text" name="titre" value="' . $line['titre'] . '" class="form-control">';
        echo '</div>';

        echo '<div class="form-group">';
        echo '<label for="texte" style="color: #ffffff">Texte</label>';
        echo '<input type="text" name="texte" value="' . $line['texte'] . '" class="form-control">';
        echo '</div>';

        echo '<div class="form-group">';
        echo '<label for="texte" style="color: #ffffff">Slug</label>';
        echo '<input type="text" name="slug" value="' . $line['slug'] . '" class="form-control">';
        echo '</div>';

        echo '<button type="submit" class="btn btn-pill btn-success">Envoyer</button>';

        echo '</form>';
    }

}

//---------------------------------------------------------------------------------------------------------------------

//Affichage du formulaire INSERT
function formTablePresent($lines){
    echo '<table class="table table-striped table-dark">';
    echo '<thead>';
    echo '<td scope="col">id</td>';
    echo '<td scope="col">TITRE</td>';
    echo '<td scope="col">TEXTE</td>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($lines as $line){

        echo '<tr>';
        echo '<td scope="row">'.$line['id'].'</td>';
        echo '<td>'.$line['titre'].'</td>';
        echo '<td>'.$line['texte'].'</td>';
        echo '<td><button type="button" class="btn btn-warning"><a href="?table=te_present&action=update&id='.$line['id'].'" style="color: #ffffff">Update</a></button></td>';
        echo '<td><button type="button" class="btn btn-danger"><a href="?table=te_present&action=delete&id='.$line['id'].'" style="color: #ffffff">Delete</a></button></td>';
        echo '</tr>';
    }
    echo '<tbody>';
    echo '</table>';
}
//Affichage du formulaire UPDATE
function formTablePresent2($lines){

    foreach ($lines as $line){
        echo '<form method="post" action"">';

        echo '<div class="form-group">';
        echo '<label for="titre" style="color: #ffffff">Titre</label>';
        echo '<input type="text" name="titre" value="'.$line['titre'].'" class="form-control">';
        echo '</div>';

        echo '<div class="form-group">';
        echo '<label for="texte" style="color: #ffffff">Texte</label>';
        echo '<input type="text" name="texte" value="'.$line['texte'].'" class="form-control">';
        echo '</div>';

        echo '<button type="submit" class="btn btn-pill btn-success">Envoyer</button>';

        echo '</form>';
    }
}

//---------------------------------------------------------------------------------------------------------------------

//Affichage du formulaire INSERT
function formTableServices($lines){
    echo '<table class="table table-striped table-dark">';
    echo '<thead>';
    echo '<td scope="col">id</td>';
    echo '<td scope="col">NOM</td>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($lines as $line){

        echo '<tr>';
        echo '<td scope="row">'.$line['id'].'</td>';
        echo '<td>'.$line['nom'].'</td>';
        echo '<td><button type="button" class="btn btn-warning"><a href="?table=te_services&action=update&id='.$line['id'].'" style="color: #ffffff">Update</a></button></td>';
        echo '<td><button type="button" class="btn btn-danger"><a href="?table=te_services&action=delete&id='.$line['id'].'" style="color: #ffffff">Delete</a></button></td>';
        echo '</tr>';
    }
    echo '<tbody>';
    echo '</table>';

}

//Affichage du formulaire UPDATE
function formTableServices2($db){
    $id = $_GET['id'];
    $request="SELECT * FROM `te_services` WHERE `id` = $id";
    $reponse=crudDb($db,$request);
    $lines = $reponse->fetchAll();

    foreach ($lines as $line){
        echo '<form method="post" action"">';

        echo '<div class="form-group">';
        echo '<label for="nom" style="color: #ffffff">Nom</label>';
        echo '<input type="text" name="nom" value="'.$line['nom'].'" class="form-control">';
        echo '</div>';

        echo '<button type="submit" class="btn btn-pill btn-success">Envoyer</button>';

        echo '</form>';
    }
}

//---------------------------------------------------------------------------------------------------------------------

//Affichage du formulaire INSERT
function formTablePortfolio($lines){
    echo '<table class="table table-striped table-dark">';
    echo '<thead>';
    echo '<td scope="col">id</td>';
    echo '<td scope="col">TEXTE</td>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($lines as $line){

        echo '<tr>';
        echo '<td scope="row">'.$line['id'].'</td>';
        echo '<td>'.$line['texte'].'</td>';
        echo '<td><button type="button" class="btn btn-warning"><a href="?table=te_portfolio&action=update&id='.$line['id'].'" style="color: #ffffff">Update</a></button></td>';
        echo '<td><button type="button" class="btn btn-danger"><a href="?table=te_portfolio&action=delete&id='.$line['id'].'" style="color: #ffffff">Delete</a></button></td>';
        echo '</tr>';
    }
    echo '<tbody>';
    echo '</table>';
}

//Affichage du formulaire UPDATE
function formTablePortfolio2($lines){

    foreach ($lines as $line){
        echo '<form method="post" action"">';
        echo '<div class="form-group">';
        echo '<label for="titre" style="color: #ffffff">Titre</label>';
        echo '<input type="text" name="titre" value="'.$line['texte'].'" class="form-control">';
        echo '</div>';

        echo '<button type="submit" class="btn btn-pill btn-success">Envoyer</button>';

        echo '</form>';
    }
}

//---------------------------------------------------------------------------------------------------------------------
//Affichage du formulaire INSERT
function formTableContact($lines){
    echo '<table class="table table-striped table-dark">';
    echo '<thead>';
    echo '<td scope="col">id</td>';
    echo '<td scope="col">NOM</td>';
    echo '<td scope="col">PRENOM</td>';
    echo '<td scope="col">E-MAIL</td>';
    echo '<td scope="col">MESSAGE</td>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($lines as $line){

        echo '<tr>';
        echo '<td scope="row">'.$line['id'].'</td>';
        echo '<td>'.$line['nom'].'</td>';
        echo '<td>'.$line['prenom'].'</td>';
        echo '<td>'.$line['email'].'</td>';
        echo '<td>'.$line['message'].'</td>';
        //echo '<td><button type="button" class="btn btn-warning"><a href="?table=te_contact&action=update&id='.$line['id'].'" style="color: #ffffff">Update</a></button></td>';
        echo '<td><button type="button" class="btn btn-danger"><a href="?table=te_contact&action=delete&id='.$line['id'].'" style="color: #ffffff">Delete</a></button></td>';
        echo '</tr>';
    }
    echo '<tbody>';
    echo '</table>';
}

//---------------------------------------------------------------------------------------------------------------------

//Affichage du formulaire INSERT
function formTableImage($lines){
    echo '<table class="table table-striped table-dark">';
    echo '<thead>';
    echo '<td scope="col">id</td>';
    echo '<td scope="col">Nom dossier</td>';
    echo '<td scope="col">Nom fichier</td>';
    echo '<td scope="col">extension</td>';
    echo '<td scope="col">position</td>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($lines as $line){

        echo '<tr>';
        echo '<td scope="row">'.$line['id'].'</td>';
        echo '<td>'.$line['nom_dossier'].'</td>';
        echo '<td>'.$line['nom_fichier'].'</td>';
        echo '<td>'.$line['extension'].'</td>';
        echo '<td>'.$line['position'].'</td>';
        echo '<td><button type="button" class="btn btn-warning"><a href="?table=te_image&action=update&id='.$line['id'].'" style="color: #ffffff">Update</a></button></td>';
        echo '<td><button type="button" class="btn btn-danger"><a href="?table=te_image&action=delete&id='.$line['id'].'" style="color: #ffffff">Delete</a></button></td>';
        echo '</tr>';
    }
    echo '<tbody>';
    echo '</table>';
}

//Affichage du formulaire UPDATE
function formTableImage2($db){
    $id = $_GET['id'];
    $request="SELECT * FROM `te_image` WHERE `id` = $id";
    $reponse=crudDb($db,$request);
    $lines = $reponse->fetchAll();

    foreach ($lines as $line){
    echo '<form method="post" action"" enctype="multipart/form-data">';

    echo '<div class="form-group">';
    echo '<label for="nom_dossier" style="color: #ffffff">Nom Dossier</label>';
    echo '<input type="text" name="nom_dossier" value="'.$line['nom_dossier'].'" class="form-control">';
    echo '</div>';

    echo '<div class="form-group">';
    echo '<label for="nom_fichier" style="color: #ffffff">Nom Fichier</label>';
    echo '<input type="text" name="nom_fichier" value="'.$line['nom_fichier'].'" class="form-control">';
    echo '</div>';

    echo '<div class="form-group">';
    echo '<label for="extension" style="color: #ffffff">extension</label>';
    echo '<input type="text" name="extension" value="'.$line['extension'].'" class="form-control">';
    echo '</div>';

    echo '<div class="form-group">';
    echo '<label for="position" style="color: #ffffff">Titre</label>';
    echo '<input type="text" name="position" value="'.$line['position'].'" class="form-control">';
    echo '</div>';

    echo '<button type="submit" class="btn btn-pill btn-success">Envoyer</button>';

    echo '</form>';
    }
}

//---------------------------------------------------------------------------------------------------------------------

//Affichage du formulaire INSERT
function formTableLiens($lines){
    echo '<table class="table table-striped table-dark">';
    echo '<thead>';
    echo '<td scope="col">id</td>';
    echo '<td scope="col">LIEN</td>';
    echo '<td scope="col">POSITION</td>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($lines as $line){

        echo '<tr>';
        echo '<td scope="row">'.$line['id'].'</td>';
        echo '<td>'.$line['lien'].'</td>';
        echo '<td>'.$line['position'].'</td>';
        echo '<td><button type="button" class="btn btn-warning"><a href="?table=te_liens&action=update&id='.$line['id'].'" style="color: #ffffff">Update</a></button></td>';
        echo '<td><button type="button" class="btn btn-danger"><a href="?table=te_liens&action=delete&id='.$line['id'].'" style="color: #ffffff">Delete</a></button></td>';
        echo '</tr>';
    }
    echo '<tbody>';
    echo '</table>';
}

//Affichage du formulaire UPDATE
function formTableLiens2($lines){

    foreach ($lines as $line){
        echo '<form method="post" action"">';

        echo '<div class="form-group">';
        echo '<label for="titre" style="color: #ffffff">Lien</label>';
        echo '<input type="text" name="titre" value="'.$line['lien'].'" class="form-control">';
        echo '</div>';

        echo '<div class="form-group">';
        echo '<label for="titre" style="color: #ffffff">Position</label>';
        echo '<input type="text" name="titre" value="'.$line['position'].'" class="form-control">';
        echo '</div>';

        echo '<button type="submit" class="btn btn-pill btn-success">Envoyer</button>';

        echo '</form>';
    }
}
//---------------------------------------------------------------------------------------------------------------------

echo '</body>
</html>';
