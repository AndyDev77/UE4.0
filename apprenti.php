<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Accompagnement</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/svg+xml">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!--recapcha-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

<nav class="navbar navbar-expand-lg fixed-top">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php"><img src="./images/UE4.0.png" alt="Logo du Training Center 4.0" width="150">
      <img src="./images/HASSTEC.PNG" alt="" width="80" style="margin-top: 78px;"></a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="margin: 0 70px;">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Nous Connaitre
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="partenaires.php">Partenaires</a>
            <a class="dropdown-item" href="inscription.php">Inscriptions</a>
            <a class="dropdown-item" href="galerie.php">Galerie</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="apprenti.php">Accompagnement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="actu.php">Actualités</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="learning.php">E-learning</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.paris-villaroche-training-center.parcours.pro/"
            target="_blank">Plateforme</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="soft-login.php">Soft-skills</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="index.php#contact">Contact</a>
        </li>
      </ul>
    </div>

  </nav>

    <!--ImageBackground-->
    <section class="img-background"
        style="background-image: url('./images/apprentissages/_MG_1848.jpg');  background-size: cover; height: 80vh; min-height: 300px; position: relative; color: var(--white); text-shadow: var(--shadow-black-100); ">
        <div class="color-overlay d-flex justify-content-center align-items-center" style="position: absolute; 
      width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.4); ">
            <h1 style="font-size: 4rem;">Accompagnement</h1>
        </div>
    </section>


    <section class="apprenti section-padding" id="apprenti">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>Voici nos accompagments </h2>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class="row justify-content-center">
                <div class="card" style="width: 22rem;">
                    <img src="./images/Savannah.jpg" class="card-img-top" alt="...">
                    <br>
                    <div class="card-body">
                        <h5 class="card-title">Atelier de construction d'un ultra léger motorisé</h5>
                        <p class="card-text">Préparer les apprenants au futur de l'industrie par la sensibilisation au
                            numérique.
                        </p>
                        <div class="about-btn">
                            <button type="button" class="btn btn-2 apprenti-1" data-toggle="modal"
                                data-target="#exampleModal">En savoir plus</button>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Atelier de construction d'un
                                        ultra léger motorisé</h5>
                                </div>
                                <div class="modal-body">
                                    <h6>Objectif de l'accompagnement</h6>
                                    <p>Préparer les apprenants au futur de l'industrie par la sensibilisation au
                                        numérique, découvrir les métiers de la mécanique aéronautique à travers
                                        un atelier de construction d'ultra léger motorisé.</p>
                                    <h6>Description de l'accompagnement</h6>
                                    <p>Proposer un accompagnement renforcé en présentiel et distanciel pour
                                        découvrir les métiers en tension du secteur industriel.</p>
                                    <h6>Conditions d'accès</h6>
                                    <p>Savoir être</p>
                                    <h6>Validation</h6>
                                    <p>Attestation de suivi délivrée par la région île-de-france.</p>
                                    <h6>Informations complémentaires</h6>
                                    <p>Parcours personnalisé : pédagogie hybride.</p>
                                </div>
                                <div class="modal-footer">
                                    <div class="about-btn">
                                        <button type="button" class="btn btn-2" data-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 22rem;">
                    <img src="./images/apprentissages/_MG_1781.jpg" class="card-img-top" alt="...">
                    <br>
                    <div class="card-body">
                        <h5 class="card-title">Accompagnement vers la préparation du CQPM</h5>
                        <p class="card-text">Découverte des métiers de la mécanique de précision
                            possibilité de préparer un certificat professionnel de qualification.
                        </p>
                        <div class="about-btn">
                            <button type="button" class="btn btn-2 apprenti-2" data-toggle="modal"
                                data-target="#exampleModal-1">En savoir plus</button>
                        </div>

                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Accompagnement vers la
                                        préparation du CQPM </h5>
                                </div>
                                <div class="modal-body">
                                    <h6>Objectif de l'accompagnement</h6>
                                    <p>découverte des métiers de la mécanique de précision <br>
                                        possibilité de préparer un
                                        certificat professionnel de qualification.</p>
                                    <h6>Description de l'accompagnement</h6>
                                    <p>Modules techniques de mécanique en ligne. <br>
                                        Simulateurs virtuels en téléchargement. <br>
                                        Serious Games <br>
                                        Anglais professionnel <br>
                                        Remise à niveau mathématiques <br>
                                        Français technique <br>
                                        ...</p>
                                    <h6>Conditions d'accès</h6>
                                    <p>- Savoir lire et écrire</p>
                                    <h6>Validation</h6>
                                    <p>- Badges de compétences <br>
                                        - Attestation de suivi</p>
                                    <h6>Informations complémentaires</h6>
                                    <p>Parcours personnalisé : pédagogie hybride.</p>
                                </div>
                                <div class="modal-footer">
                                    <div class="about-btn">
                                        <button type="button" class="btn btn-2" data-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 22rem;">
                    <img src="./images/apprentissages/_MG_1848.jpg" class="card-img-top" alt="...">
                    <br>
                    <div class="card-body">
                        <h5 class="card-title">Métiers d'opérateur-régleur sur machine-outil
                        </h5>
                        <p class="card-text">Découvrir le parcours de formation pour préparer le certificat d'opérateur
                            régleur sur machines outils à commandes numériques
                        </p>
                        <div class="about-btn">
                            <button type="button" class="btn btn-2 apprenti-3" data-toggle="modal"
                                data-target="#exampleModal-2">En savoir plus</button>
                        </div>

                        <br>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Opérateur-régleur sur
                                        machine-outil à commande numérique par enlèvement de matière</h5>
                                </div>
                                <div class="modal-body">
                                    <h6>Objectif de l'accompagnement</h6>
                                    <p>Découvrir le parcours de formation pour préparer le certificat d'opérateur
                                        régleur sur machines outils à commandes numériques <br></p>
                                    <p>Maîtriser les compétences et aptitudes mécaniciennes pour conduire un équipement
                                        d'usinage.</p>

                                    <h6>Validation</h6>
                                    <p>- Badges de compétences <br>- Attestation de suivi</p>

                                    <h6>Donne accès au(x) métier(s) suivant(s)</h6>
                                    <p>- Tourneur fraiseur CN <br>
                                        - Conduite d'équipement d'usinage</p>
                                    <h6>Informations complémentaires</h6>
                                    <p>Parcours personnalisé : pédagogie hybride.</p>
                                </div>
                                <div class="modal-footer">
                                    <div class="about-btn">
                                        <button type="button" class="btn btn-2" data-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- BAND -->

    <section class="band ">
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <img src="./images/img-partenaires/logo-ue.jpg" height="100" width="150" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/REGION_IDF.jpg" height="100" width="200" alt="">
                </div>

                <div class="slide">
                    <img src="./images/img-partenaires/pole-emploi-2.jpg" height="100" width="130" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/melun.jpg" height="100" width="110" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/PREF77.jpg" height="100" width="100" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/AIF.jpg" height="100" width="120" alt="">
                </div>

                <div class="slide">
                    <img src="./images/img-partenaires/FF.png" height="100" width="190" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/EOZ.jpg" height="100" width="190" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/LdV.png" height="100" width="200" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/htec.jpg" height="100" width="200" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/cfa.png" height="100" width="200" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/cam-system.png" height="100" width="200" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/jbplogo.jpg" height="100" width="200" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-col">
                        <h3>Training Center 4.0</h3>
                        <p class="text-footer">Pôle de ressources et d'accompagnement vers les métiers mécaniques
                            aéronautiques et industriels soutenu par l'Europe.</p>
                        <div class="footer-links">
                            <a href="https://m.facebook.com/trainingcentersympav/" target="_blank"
                                class="footer__social">
                                <i class="fa fa-facebook-official"></i>
                            </a>
                            <a href="https://twitter.com/TCenter4_0/" target="_blank" class="footer__social">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com/trainingcenter4.0/" target="_blank"
                                class="footer__social">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCqan073e4fkLA_HtG_uWk8Q" target="_blank"
                                class="footer__social">
                                <i class="fa fa-youtube-play"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/tcenter-sympav-28bb571a3/" target="_blank"
                                class="footer__social">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-col props">
                        <h3>À propos</h3>
                        <ul>
              <li><a href="apprenti.php">Accompagnement</a></li>
              <li><a href="learning.php">E-Learning</a></li>
              <li><a href="actu.php">Actualités</a></li>
              <li><a href="https://www.paris-villaroche-training-center.parcours.pro/">Plateforme</a></li>
              <!-- <li><a href="#">Soft-Skills</a></li> -->
              <li><a href="index.php#contact">Contact</a></li>

            </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-col">
                        <h3>Informations</h3>
                        <p>Aérodrome de Melun Villaroche 77950 Montereau-sur-le-Jard</p>
                        <br>
                        <a class="mail" href="mailto:trainingcenter@parisvillaroche.com"
                            class="footer__link">trainingcenter@ <br>
                            parisvillaroche.com
                        </a>
                        <br>
                        <a class="mail" href="tel:+33757079455" class="footer__link">01 60 68 11 44</a>
                    </div>
                </div>

                <!-- <div class="col-lg-4 col-md-6">
                    <div class="footer-col">
                        <h3>Nos Politiques</h3>
                        <ul>
                            <li><a href="#">Politique d’utilisation des cookies</a></li>
                            <li><a href="#">Mentions légales</a></li>
                            <li><a href="#">Politique de confidentialité</a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright-text">&copy;2023 Training Center 4.0. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </footer>


    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup scroll-up">
        <i class="fa fa-arrow-up scrollup__icon" aria-hidden="true"></i>
    </a>

    <!-- jquery js -->
    <script src="js/jquery.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- ScrollIt js -->
    <script src="js/scrollIt.min.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>

</html>