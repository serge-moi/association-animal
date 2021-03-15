<?php

function styleTitreNiveau1($texte, $color){
    $txt = "<h1 class='text-center my-3 ".$color."perso_policeTitre perso_textShadow'>";
    $txt .= $texte;
    $txt .= "</h1>";
    return $txt;
}

function styleTitreNiveau2($texte, $color){
    $txt = "<h2 class='text-center my-3 ".$color."perso_policeTitre perso_textShadow'>";
    $txt .= $texte;
    $txt .= "</h2>";
    return $txt;
}

function styleTitreNiveau3($texte, $color){
    $txt = "<h3 class='my-3 ".$color."perso_policeTitre perso_textShadow perso_size26'>";
    $txt .= $texte;
    $txt .= "</h3>";
    return $txt;
}

function styleTitrePost($texte){
    $txt = "<h2 class='my-3 perso_policeTitre perso_textShadow border-bottom border-dark'>";
    $txt .= $texte;
    $txt .= "</h2>";
    return $txt;
}

function affichageCoupe($str,$taille){
    $desc = "";
    // On vérifie si la chaine entrée en parametre est supérieure a la taille divisée par 2
    // si cette condition ne passe pas, cela veut dire qu'on a affaire a une petite chaine
    if(strlen($str) >$taille/2){
        // en fonction de la position des br, on va chercher si le caractere br est présent entre 150 et 300 par exemple si on a entré 300 en valeur
        if(strpos($str, "<br/>",($taille/2)) < $taille){
            // dans ce cas la on mets dans desc, le subtr de la chaine et la position.
            $desc = substr($str,0,strpos($str,"<br/>",($taille/2)));
            // dans le cas ou ce n'est pas trouvé, on fait le meme principe mais on vérifie si on trouve un point
        } else if(strpos($str, ".",($taille/2)) < $taille){
            $desc = substr($str,0,strpos($str,".",($taille/2)));
            // Ensuite si on ne trouve pas, on va vérifier le br a nouveau, mais entre 0 et taille/2 donc 0 et 150 dans cet exemple
        } else if(strpos($str, "<br />", 0) <= ($taille/2)){
            $desc = substr($str,0,strpos($str, "<br />", 0));
        } else if(strpos($str, ".", 0) < ($taille/2)){
            $desc = substr($str,0,strpos($str, ".", 0));
        } else {
            $desc = substr($str,0,strpos($str, " ", ($taille/3)));
        }
    } else {
        // on mets directement dans desc la chaine
        $desc = $str;
    }
    // on concatene avec les 3 ptits points et on retourne le resultat
    $desc .= "<br class='text-primary'>[...]</>";
    return $desc;
}