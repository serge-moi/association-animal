<?php
ob_start();
echo styleTitreNiveau1($titreh1, COLOR_PENSIONNAIRE); ?>

<div class="row no-gutters">
    <?php foreach($animaux as $animal): ?>
    <div class="col-12 col-lg-6">
        <div class="row border border-dark rounded-lg m-2 align-items-center <?= !$animal["sexe"] ? " perso_bgRose" : " perso_bgGreen" ; ?>" style="height: 200px;">
            <div class="col p-2 text-center">
                <img src="<?= URL ?>public/sources/images/sites/<?= $animal["image"]['url_image'] ?>" style="max-height:180px" class="img-thumbnail" alt="<?= $animal["image"]['libelle_image'] ?>">
            </div>
            <div class="col-2 border-left border-right border-dark text-center">
                <img src="<?= URL ?>public/sources/images/Autres/icones/<?= $animal["ami_chien"] === "oui" ? "chienOk.png" : "chienBar.png";?>" class="img-fluid m-1" style="width:50px;" alt="chienOk">
                <img src="<?= URL ?>public/sources/images/Autres/icones/<?= $animal["ami_chat"] === "oui" ? "chatOk.png" : "chatBar.png";?>" class="img-fluid m-1" style="width:50px;" alt="chatOk">
                <img src="<?= URL ?>public/sources/images/Autres/icones/<?= $animal["ami_enfant"] === "oui" ? "babyOk.png" : "babyBar.png";?>" class="img-fluid m-1" style="width:50px;" alt="bebeOk">
            </div>
            <div class="col-6 text-center">
                <div class="perso_policeTitre perso_size20 mb-3"><?= $animal["nom_animal"]; ?></div>
                <div class="mb-2">Né : <?= date("d/m/Y", strtotime($animal["date_naissance_animal"])); ?></div>
                <div class="my-3">
                <?php foreach($animal["caractere"] as $caract): ?>
                    <span class="badge badge-warning m-1 p-2 d-none d-sm-inline"><?= $animal["sexe"] ? $caract["libelle_caractere_m"] : $caract["libelle_caractere_f"]; ?></span>
                <?php endforeach; ?>
                </div>    
                <a href="<?= URL ?>animal&idAnimal=<?= $animal["id"]; ?>" class="btn btn-primary">Visiter ma page</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php
    $content = ob_get_clean();
    require("views/commons/template.php");
?>