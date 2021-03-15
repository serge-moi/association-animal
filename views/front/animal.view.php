<?php
ob_start();

echo styleTitreNiveau1($animal["nom_animal"], COLOR_PENSIONNAIRE); ?>


<div class="row border border-dark rounded-lg m-2 align-items-center <?= $animal["sexe"] ? "perso_bgGreen" : "perso_bgRose" ; ?>">
    <div class="col p-2 text-center">
        <img src="<?= URL ?>public/sources/images/sites/<?= $images[0]['url_image'] ?>" style="max-height:180px" class="img-thumbnail" alt="<?= $images[0]['libelle_image'] ?>">
    </div>
    <div class="col-2 col-md-1 border-left border-right border-dark text-center">
        <img src="<?= URL ?>public/sources/images/Autres/icones/<?= $animal["ami_chien"] === "oui" ? "chienOk.png": "chienBar.png" ;?>" class="img-fluid m-1" style="width:50px;" alt="chienOk">
        <img src="<?= URL ?>public/sources/images/Autres/icones/<?= $animal["ami_chat"] === "oui" ? "chatOk.png": "chatBar.png" ;?>" class="img-fluid m-1" style="width:50px;" alt="chatOk">
        <img src="<?= URL ?>public/sources/images/Autres/icones/<?= $animal["ami_enfant"] === "oui" ? "babyOk.png": "babyBar.png" ;?>" class="img-fluid m-1" style="width:50px;" alt="bebeOk">
    </div>
    <div class="col-6 col-md-4 text-center">
        <div class="mb-2">Puce : <?= $animal["puce"]; ?></div>
        <div class="mb-2">Né : <?= date("d/m/Y",strtotime($animal["date_naissance_animal"])); ?></div>
        <div class="my-3">
        <?php foreach($caracteres as $caract): ?>
            <span class="badge badge-warning m-1 p-2 d-none d-sm-inline"><?= $animal["sexe"] ? $caract["libelle_caractere_m"] : $caract["libelle_caractere_f"]; ?></span>
        <?php endforeach; ?>
        </div>    
    </div>
    <div class="col-12 col-md-4">
        Frais d'adoption : 60€<br/>
        Vaccins : 35€ (à la demande de l'adoptant)<br/>
        Stérilisation : caution de 200 € vous sera demandée (rendue après réception du certificat).
    </div>
</div>

<div class="row no-gutters align-items-center">

    <div class="col-12 col-lg-6">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <?php foreach($images as $key => $image): ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?= $key ?>" class="<?= $key === 0 ? "active " : ""; ?> bg-dark"></li>
            <?php endforeach; ?>
            </ol>
            <div class="carousel-inner text-center">
                <?php foreach($images as $key => $image): ?>
                    <div class="carousel-item <?= $key === 0 ? "active" : ""; ?>">
                        <img class="img-thumbnail" src="<?= URL ?>public/sources/images/sites/<?= $image["url_image"]; ?>" alt="<?= $image["libelle_image"]; ?>" style="height: 500px;">
                    </div>
                <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <div>  
            <?= styleTitreNiveau2("Qui suis-je ?", COLOR_PENSIONNAIRE) ?>
            <?= $animal["description_animal"]; ?>
        </div>
        <hr />
        <div>
            <img src="<?= URL ?>public/sources/images/Autres/icones/IconeAdopt.png" alt="" width="50" height="50" class="d-block mx-auto">
            <?= $animal["adoption_desc_animal"]; ?>
        </div>
        <hr />
        <div>
            <img src="<?= URL ?>public/sources/images/Autres/icones/oeil.jpg" alt="" width="50" height="50" class="d-block mx-auto">
            <?= $animal["localisation_animal"]; ?>
        </div>
        <hr />
        <div>
            <img src="<?= URL ?>public/sources/images/Autres/icones/iconeContrat.png" alt="" width="50" height="50" class="d-block mx-auto">
            <?= $animal["engagement_animal"]; ?>
        </div>
    </div>

</div>


<?php
$content = ob_get_clean();
require("views/commons/template.php"); ?>