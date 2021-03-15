<?php

require_once("pdo.php");

function getAnimalFromStatut($idStatus){
    $bdd = connexionPDO();
    $sql = "SELECT * FROM animal WHERE id_status = :idStatus";
    if($idStatus == ID_STATUS_ADOPTE){
        $sql .= " or id_status = ".ID_STATUS_MORT;
    }
    $req = $bdd->prepare($sql);
    $req->bindValue(":idStatus",$idStatus,PDO::PARAM_INT);
    $req->execute();
    $animaux = $req->fetchAll(PDO::FETCH_ASSOC);
    $req->closeCursor();
    return $animaux;
}

function getFirstImageAnimal($idAnimal){
    $bdd = connexionPDO();
        $req = $bdd->prepare("SELECT i.id_image,libelle_image,url_image,description_image 
    FROM image i 
    inner join contient c on i.id_image = c.id_image 
    INNER JOIN animal a on a.id = c.id_animal 
    WHERE a.id = :idAnimal LIMIT 1");
    $req->execute([
        // sécuriser l'accès aux données et éviter les injections SQL
        ":idAnimal" => $idAnimal
    ]);
    $image = $req->fetch(PDO::FETCH_ASSOC);
    $req->closeCursor();
    return $image;
}

function getCaractereAnimalBD($idAnimal){
    $bdd = connexionPDO();
    $req = $bdd->prepare("SELECT c.libelle_caractere_m, c.libelle_caractere_f
    FROM caractere c
    inner JOIN dispose d on c.id_caractere = d.id_caractere
    INNER JOIN animal a on a.id = d.id_animal
    WHERE a.id = :idAnimal");
    $req->execute([
        // sécuriser l'accès aux données et éviter les injections SQL
        "idAnimal" => $idAnimal
    ]);
    $caracteres = $req->fetchAll(PDO::FETCH_ASSOC);
    $req->closeCursor();
    return $caracteres;
}

function getAnimalBD($idAnimal){
    $bdd = connexionPDO();
    $sql = "SELECT * FROM animal WHERE id = :idAnimal";
    $req = $bdd->prepare($sql);
    $req->bindValue(":idAnimal",$idAnimal);
    $req->execute();
    $animal = $req->fetch(PDO::FETCH_ASSOC);
    $req->closeCursor();
    return $animal;
}

function getImagesFromAnimal($idAnimal){
    $bdd = connexionPDO();
    $req = $bdd->prepare("SELECT i.id_image,libelle_image,url_image,description_image 
    FROM image i 
    inner join contient c on i.id_image = c.id_image 
    INNER JOIN animal a on a.id = c.id_animal 
    WHERE a.id = :idAnimal");
    $req->execute([
        // sécuriser l'accès aux données et éviter les injections SQL
        ":idAnimal" => $idAnimal
    ]);
    $images = $req->fetchAll(PDO::FETCH_ASSOC);
    $req->closeCursor();
    return $images;
}


?>