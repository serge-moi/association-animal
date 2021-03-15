<nav class="navbar navbar-expand-lg navbar-dark bg-dark perso_size20">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle perso_ColorRoseMenu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    L'asso
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item perso_ColorRoseMenu" href="<?= URL ?>association">Qui sommes-nous ?</a></li>
                    <li><a class="dropdown-item perso_ColorRoseMenu" href="<?= URL ?>partenaires">Partenaires</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle perso_ColorOrangeMenu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pensionnaires
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item perso_ColorOrangeMenu" href="<?= URL ?>pensionnaires&id_status=<?= ID_STATUS_A_L_ADOPTION ?>">Ils cherchent une famille</a>
                    <a class="dropdown-item perso_ColorOrangeMenu" href="<?= URL ?>pensionnaires&id_status=<?= ID_STATUS_FALD ?>">Famille d'Accueil Longue Durée</a>
                    <a class="dropdown-item perso_ColorOrangeMenu" href="<?= URL ?>pensionnaires&id_status=<?= ID_STATUS_ADOPTE ?>">Les anciens</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle perso_ColorVertMenu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Actus
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item perso_ColorVertMenu" href="<?= URL ?>actus&type=<?= TYPE_NEWS ?>">Nouvelles des adoptés</a>
                    <a class="dropdown-item perso_ColorVertMenu" href="<?= URL ?>actus&type=<?= TYPE_EVENTS ?>">Evénements</a>
                    <a class="dropdown-item perso_ColorVertMenu" href="<?= URL ?>actus&type=<?= TYPE_ACTIONS ?>">Nos actions au quotidien</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle perso_ColorVertMenu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    Conseils
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item perso_ColorVertMenu" href="<?= URL ?>temperatures">Températures</a></li>
                    <li><a class="dropdown-item perso_ColorVertMenu" href="<?= URL ?>chocolat">Le chocolat</a></li>
                    <li><a class="dropdown-item perso_ColorVertMenu" href="<?= URL ?>plantes">Les plantes toxiques</a></li>
                    <li><a class="dropdown-item perso_ColorVertMenu" href="<?= URL ?>sterilisation">Stérilisation</a></li>
                    <li><a class="dropdown-item perso_ColorVertMenu" href="<?= URL ?>educateur">Educateur canin</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle perso_ColorBleuCielMenu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    Contacts
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item perso_ColorBleuCielMenu" href="<?= URL ?>contact">Contact</a>
                    <a class="dropdown-item perso_ColorBleuCielMenu" href="<?= URL ?>don">Don</a>
                    <a class="dropdown-item perso_ColorBleuCielMenu" href="<?= URL ?>mentions">Mentions légales</a>
                </div>
            </li>

        </ul>
    </div>
</nav>