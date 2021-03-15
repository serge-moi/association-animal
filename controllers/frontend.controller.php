<?php 
require_once("public/utilities/formatage.php");
require_once("models/animal.dao.php");
require_once("models/actualite.dao.php");
require_once("config/config.php");

function getPagePensionnaires(){

    $title = "Page des pentionnaires";
    $description = "C'est la page des pentionnaires";

    $getStatus = (int)$_GET["id_status"];
    if(isset($getStatus) && !empty($getStatus)){
        $idStatut = Securite::secureHTML($getStatus);

        $animaux = getAnimalFromStatut($idStatut);

        $titleh1 = "";
        if((int) $idStatut === ID_STATUS_A_L_ADOPTION){
            $titreh1 = "Ils cherchent une famille";
        } else if ((int) $idStatut === ID_STATUS_ADOPTE){
            $titreh1 = "Les anciens";
        } else if ((int) $idStatut === ID_STATUS_FALD){
            $titreh1 = "Famille d'accueil longue durée";
        }

        foreach($animaux as $key => $animal){
            $image = getFirstImageAnimal($animal["id"]);
            $animaux[$key]["image"] = $image;
            
            $caracteres = getCaractereAnimalBD($animal["id"]);
            $animaux[$key]["caractere"] = $caracteres;
        }
        // echo "<pre>";
        // print_r($animaux);

        require_once("views/front/pensionnaire.view.php");
    } else {
        throw new Exception("L'id du Statut n'est pas renseigné, vous ne pouvez pas accéder à la page");
    }
    
}

function getPageAccueil(){
    $title = "Page d'accueil";
    $description = "Nos Amis Nos Animaux (N.A.N.A)";

    $animaux = getAnimalFromStatut(ID_STATUS_A_L_ADOPTION);

    foreach($animaux as $key => $animal){
        $image = getFirstImageAnimal($animal["id"]);
        $animaux[$key]["image"] = $image;
    }
    $news = getLastNews();
    $action = getLastActionsOrEvents();

    require_once "views/front/accueil.view.php";
}

function getPageAssociation(){
    $title = "L'association";
    $description = "Page décrivant l'association";

    require_once "views/front/association/association.view.php";
}

function getPagePartenaires(){
    $title = "Les partenaires";
    $description = "Les partenaires de l'association";

    require_once "views/front/association/partenaires.view.php";
}

function getPageTemperatures(){
    $title = "Article Temperatures";
    $description = "La page traitant des risques liés aux températures pour les animaux";

    require_once "views/front/articles/temperatures.view.php";
}


function getPageChocolat(){
    $title = "Article Chocolat";
    $description = "La page traitant des risques liés aux chocolats pour les animaux";

    require_once "views/front/articles/chocolat.view.php";
}


function getPagePlantes(){
    $title = "Article Plantes";
    $description = "La page traitant des risques liés aux plantes pour les animaux";

    require_once "views/front/articles/plantes.view.php";
}


function getPageSterilisation(){
    $title = "Article Stérilisation";
    $description = "La page traitant de l'importance de la stérilisation";

    require_once "views/front/articles/sterilisation.view.php";
}


function getPageEducateur(){
    $title = "Article Educateur";
    $description = "La page traitant des éducateurs canins";

    require_once "views/front/articles/educateur.view.php";
}


function getPageContact(){
    $title = "La page de contact";
    $description = "La page de contact";

    require_once "views/front/contact/contact.view.php";
}


function getPageDon(){
    $title = "Donation";
    $description = "La page pour faire des donations";

    require_once "views/front/contact/don.view.php";
}

function getPageMentions(){
    $title = "Les mentions-légales";
    $description = "Les mentions-légales";

    require_once "views/front/contact/mentions.view.php";
}

function getPageActus(){
    $title = "Les Actualités";
    $description = "La page d'actualité du site";

    if(isset($_GET["type"]) && !empty($_GET["type"])){   
        $typeNews = Securite::secureHTML($_GET["type"]);
        $actualites = getActualiteFromBD($typeNews);
        foreach($actualites as $key => $actualite){ 
            $image = getImageActualiteFromBD($actualite["id_image"]);
            $actualites[$key]["image"] = $image;
        }

        require_once("views/front/actus.view.php");
    } else {
        throw new Exception("Le type d'actualité n'est pas renseigné, vous ne pouvez pas accéder à la page");
    }

}

function getPageAnimal(){
    if(isset($_GET["idAnimal"]) && !empty($_GET["idAnimal"])){
        $idAnimal = Securite::secureHTML($_GET["idAnimal"]);
        $animal = getAnimalBD($idAnimal);

        $title = "La page de ". $animal["nom_animal"];
    
        $description = "La page de ". $animal["nom_animal"];
    
        $images = getImagesFromAnimal($idAnimal);
    
        $caracteres = getCaractereAnimalBD($idAnimal);
    
        require_once("views/front/animal.view.php");    

    } else{
        throw new Exception("L'id de l'animal n'est pas renseigné, vous ne pouvez pas accéder à cette page");
    }

}


