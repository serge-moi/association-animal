<?php ob_start();?>

<?= styleTitreNiveau1("Contact", COLOR_CONTACT) ?>

<?= styleTitreNiveau3("Suivez-nous :", COLOR_CONTACT);?>
<p class="pl-5">
    <a href="https://www.facebook.com/nosamisnosanimaux/" target=_blank><img src="public/sources/images/Autres/icones/facebook.png" width="30px" alt="Facebook"/></a>
    Suivez-nous sur facebook et participez à l'aventure de Nos Amis Nos Animaux : 
    <a href="https://www.facebook.com/nosamisnosanimaux/" target=_blank><span class="badge badge-pill badge-primary">Notre facebook</span></a>
</p>

<?= styleTitreNiveau3("Contactez-nous :", COLOR_CONTACT) ?>
<div class="pl-5">
    <p>
        <img src="public/sources/images/Autres/icones/courrier.png" width="30px" alt="courrier"/>
        Par courrier : Hameau de la Souleille - 09420 Clermont, Midi-Pyrenees, France
    </p>
    <p>
        <img src="public/sources/images/Autres/icones/mail.png" width="30px" alt="mail"/>
        Par mail : <a href="mailto:associationnosamisnosanimaux@gmail.com">associationnosamisnosanimaux@gmail.com</a>
    </p>
    <p>
        <img src="public/sources/images/Autres/icones/tel.png" width="30px" alt="tel"/>
        Par téléphone : 06 10 59 94 71
    </p>
    <p>
        <span class="badge badge-pill badge-danger">Ou</span> par notre <span class="badge badge-pill badge-warning">formulaire</span> de contact :
    </p>
</div>

<?= styleTitreNiveau3("Formulaire de contact :", COLOR_CONTACT) ?>
<?php 
?>

<form action="#" method="post" class="pl-5">
    <div class="form-group row no-gutters align-items-center">
        <label for="nom" class="col-auto pr-3">Nom :</label>
        <input type="text" name="nom" id="nom" class="form-control col" placeholder="nom" required>
    </div>
    <div class="form-group row no-gutters align-items-center">
        <label for="mail" class="col-auto pr-3">Email :</label>
        <input type="email" name="mail" id="mail" class="form-control col" placeholder="nom@exemple.com" required>
    </div>
    <div class="form-group row no-gutters align-items-center">
        <label for="objet" class="col-auto pr-3">Objet :</label>
        <select class="form-control col" name="objet" id="objet">
            <option value="question">Question</option>
            <option value="adoption">Adoption</option>
            <option value="donation">Donation</option>
            <option value="autre">Autre</option>
        </select>
    </div>
    <div class="form-group">
        <label for="message">Message :</label>
        <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
    </div>
    <div class="form-group row no-gutters align-items-center">
        <label for="captcha" class="col-auto pr-3">Combien font 3+5 :</label>
        <input type="number" name="captcha" id="captcha" class="form-control col" required>
    </div>
    <input type="submit" value="Valider" class="btn btn-primary mx-auto d-block">
</form>

<?php 

if(isset($_POST["nom"]) && !empty($_POST["nom"]) &&
isset($_POST["mail"]) && !empty($_POST["mail"]) &&
isset($_POST["objet"]) && !empty($_POST["objet"]) &&
isset($_POST["message"]) && !empty($_POST["message"]) &&
isset($_POST["captcha"]) && !empty($_POST["captcha"])
)
{
    $captcha = (int) $_POST["captcha"];
    if($captcha === 8){
        $nom = htmlentities($_POST["nom"]);
        $mail = htmlentities($_POST["mail"]);
        $objet = htmlentities($_POST["objet"]);
        $message = htmlentities($_POST["message"]);
        $destinataire = "associationnosamisnosanimaux@gmail.com";
        mail($destinataire, $objet. " - " . $nom, "Mail : ". $mail. "Message : " . $message);
        echo "<div class='alert alert-success' role='alert'>";
            echo "Message envoyé";
        echo "</div>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>";
            echo "Erreur de Catpcha, recommencez";
        echo "</div>";
    }
}

?>

<?php
$content = ob_get_clean();
require("views/commons/template.php"); ?>    
      