<?php

    const COLOR_ASSO = "perso_ColorRoseMenu ";
    const COLOR_PENSIONNAIRE = "perso_ColorOrangeMenu ";
    const COLOR_ACTUS = "perso_ColorVertMenu ";
    const COLOR_CONSEILS = "perso_ColorRougeMenu ";
    const COLOR_CONTACT = "perso_ColorBleuCielMenu ";

    const ID_STATUS_A_L_ADOPTION = 1;
    const ID_STATUS_ADOPTE = 2;
    const ID_STATUS_FALD = 3;
    const ID_STATUS_MORT = 4;

    const TYPE_NEWS = "News";
    const TYPE_ACTIONS = "Actions";
    const TYPE_EVENTS = "Events";

    // Cette ligne permet de récupérer le chemin absolu en le mettant dans l'url
    define("URL",str_replace("index.php","",(isset($_SERVER["HTTPS"])?"https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

?>