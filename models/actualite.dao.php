<?php 

require_once("pdo.php");

function getActualiteFromBD($type){
    $bdd = connexionPDO();
    $sql = "SELECT * FROM actualite WHERE type_actualite = :type ORDER BY date_publication_actualite DESC";
    $req = $bdd->prepare($sql);
    $req->execute(
        [
            ":type" => $type
        ]
    );
    $actualites = $req->fetchAll(PDO::FETCH_ASSOC);
    $req->closeCursor();
    return $actualites;
}

function getImageActualiteFromBD($idImage){
    $bdd = connexionPDO();
    $sql = "SELECT * FROM image WHERE id_image = :idImage";
    $req = $bdd->prepare($sql);
    $req->execute([
        ":idImage" => $idImage
    ]);
    $image = $req->fetch(PDO::FETCH_ASSOC);
    $req->closeCursor();
    return $image;
}

function getLastNews(){
    $bdd = connexionPDO();
    $sql = "SELECT a.id_actualite, a.libelle_actualite, a.contenu_actualite, a.date_publication_actualite, a.type_actualite, a.id_image, i.libelle_image, i.url_image, i.description_image FROM actualite a INNER JOIN image i ON a.id_image = i.id_image WHERE type_actualite = :type ORDER BY date_publication_actualite DESC LIMIT 1";
    $req = $bdd->prepare($sql);
    $req->execute(
        [
            ":type" => TYPE_NEWS
        ]
    );
    $actualite = $req->fetch(PDO::FETCH_ASSOC);
    $req->closeCursor();
    return $actualite;
}

function getLastActionsOrEvents(){
    $bdd = connexionPDO();
    $sql = "SELECT a.id_actualite, a.libelle_actualite, a.contenu_actualite, a.date_publication_actualite, a.type_actualite, a.id_image, i.libelle_image, i.url_image, i.description_image FROM actualite a INNER JOIN image i ON a.id_image = i.id_image WHERE type_actualite = :typeEvent or type_actualite = :typeAction ORDER BY date_publication_actualite DESC";
    $req = $bdd->prepare($sql);
    $req->execute(
        [
            ":typeEvent" => TYPE_EVENTS,
            ":typeAction" => TYPE_ACTIONS
        ]
    );
    $actualite = $req->fetch(PDO::FETCH_ASSOC);
    $req->closeCursor();
    return $actualite;
}