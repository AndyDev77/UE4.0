<?php
require './admin/config/database.php';

// fetch current user from database
if (isset($_SESSION['user-id'])) {
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT avatar FROM users WHERE id=$id ";
    $result = mysqli_query($connexion, $query);
    $avatar = mysqli_fetch_assoc($result);
}

//fetch featured post from database
$featured_query = "SELECT * FROM posts WHERE is_featured=1";
$featured_result = mysqli_query($connexion, $featured_query);
$featured = mysqli_fetch_assoc($featured_result);



// fetch 6 posts from posts table

$queryPosts = "SELECT * FROM posts ORDER BY date_time DESC LIMIT 3";
$posts = mysqli_query($connexion, $queryPosts);


?>


<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Training Center 4.0</title>
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
    <a class="navbar-brand" href="#"><img src="./images/UE4.0.png" alt="Logo du Training Center 4.0" width="150">
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
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>

  </nav>

  <!-- HOME -->
  <section class="home" id="home">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./images/home/_MG_1405.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>Bienvenue au Training Center 4.0</h1>
            <br>
            <p>Ce projet est cofinancé par l'Union européenne</p>
            <br>
            <div class="slider-btn">
              <a href="#about" class="btn btn-2 "><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./images/home/_MG_5152.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>Trouvez votre voie aérienne</h1>
            <br>
            <p>Un accompagnement principalement orientées vers le secteur aéronautique, en lien étroit avec les
              entreprises.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./images/home/_MG_1970.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1><strong>Apprenants autonomes et passionnés</strong></h1>
            <br>
            <p>Le Training Center 4.0 accompagne par une pédagogie adaptée <br> toute personne qui souhaite découvrir <br>
              les métiers de <strong>LA MÉCANIQUE DE PRÉCISION.</strong></p>
            <br><br><br><br>
            <h1></h1>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!-- ABOUT -->

  <section class="about section-padding" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-5 d-flex align-items-center justify-content-center">
          <div class="about-img">
            <img src="./images/about/_1010507.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-7">
          <div class="section-title-2">
            <h2>Un accompagnement au cœur du centre aéronautique</h2>
          </div>
          <br>
          <div class="about-text">
            <p>Situé au cœur du Centre de technologie aéronautique, qui emploie actuellement environ 8 500 personnes et
              emploiera plus de 10 000 personnes à l'avenir, le Training Center 4.0 a été inauguré le 18 avril 2019 par
              le Président de la Communauté d'agglomération Melun-Val-de-Seine et du SYMPAV (Syndicat Mixte du Pôle
              d'Activites de Villaroche), Monsieur Louis Vogel.</p>
            <p>Le Training Center 4.0 propose un accompagnement flexible et adapté au parcours de chacun.
            </p>
            <p>Cet accompagnement s'adresse en priorité aux demandeurs d'emploi et aux jeunes, sans
              niveau spécifique pour une véritable opportunitée d'emploi sur notre
              territoire.</p>
          </div>
          <br>
          <div class="about-btn">
            <a href="#faq" class="btn btn-2">En savoir plus</a>&nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-2 video-play-btn">
              <i class="fa fa-play" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="chevron-btn">
        <a href="#voie"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
      </div>
    </div>
  </section>

  <!-- Video popup -->

  <div class="video-popup">
    <div class="video-popup-inner">
      <i class="fa fa-times video-popup-close"></i>
      <div class="video-box">
        <video class="player-1" controls>
          <source src="./video/video-1.mp4" type="video/mp4">
        </video>
      </div>
    </div>
  </div>

  <!--Voie-aerienne-->
  <section class="voie-aerienne section-padding" id="voie">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-7">
          <div class="section-title">
            <h2>Trouvez votre voie aérienne</h2>
          </div>
          <div class="voie-aerienne-text">
            <p>Le Training Center 4.0 accompagne depuis son inauguration une trentaine d’étudiants en alternance au
              brevet de techniciens supérieur CPRP en partenariat avec le lycée Leonard-de-Vinci de Melun et près de 200
              demandeurs d'emploi. </p>
            <div class="row">
              <div class="col-sm-6">
                <div class="voie-aerienne-item style">
                  <h3>250</h3>
                  <span>Personnes rencontrées (environ)</span>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="voie-aerienne-item style">
                  <h3>1500</h3>
                  <span>Élèves reçus lors du FrenchFab Tour</span>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="voie-aerienne-item style">
                  <h3>48%</h3>
                  <span>De retour à l'emploi</span>
                  <br>
                  <br><br>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="voie-aerienne-item style">
                  <h3>13</h3>
                  <span>Dont 9 stagiaires et 4 alternants dans l'équipe du Training Center 4.0</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-5 d-flex align-items-center justify-content-center">
          <div class="voie-aerienne-img">
            <img src="./images/Savannah-2.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="chevron-btn">
        <a href="#faq"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
      </div>
    </div>
  </section>

  <!--FAQ-->
  <section class="faq section-padding" id="faq">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title">
            <h2>Questions fréquemment posées</h2>
          </div>
        </div>
      </div>
      <br>
      <br>
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div id="accordion">
            <div class="accordion-item">
              <div class="accordion-header collapsed" data-toggle="collapse" data-target="#collapse-01">
                <h3>Quel est l'objectif du Training Center 4.0 ?</h3>
              </div>
              <div class="collapse" id="collapse-01" data-parent="#accordion">
                <div class="accordion-body">
                  <p>Proposer aux apprenants des modules de formations directement adaptés aux besoins très spécifiques
                    des entreprises de la mécanique de précision. Le Training center 4.0 s'associe au lycée
                    Léonard-de-Vinci de Melun pour l'ouverture de la section BTS CPRP en alternance et au Greta MTI 77,
                    CFA Académique de Créteil pour le bac pro technicien d'usinage.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header collapsed" data-toggle="collapse" data-target="#collapse-02">
                <h3>À qui est destiné le Training Center 4.0 ?</h3>
              </div>
              <div class="collapse" id="collapse-02" data-parent="#accordion">
                <div class="accordion-body">
                  <p>Aux demandeurs d'emploi et aux jeunes inactifs ou étudiants, et sans niveau spécifique. Cet
                    accompagnement constitue une véritable opportunitée vers un emploi sur notre territoire. Fort de son
                    partenariat avec les industriels du technopôle et du lycée professionnel Léonard-de-Vinci de Melun,
                    le Training Center 4.0 continue de proposer un apprentissage flexible et adapté au parcours de
                    chaque apprenant.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header collapsed" data-toggle="collapse" data-target="#collapse-03">
                <h3>Comment s'inscrire au Training Center 4.0 ?</h3>
              </div>
              <div class="collapse" id="collapse-03" data-parent="#accordion">
                <div class="accordion-body">
                  <p>Il suffit de nous contacter par notre <a href="#contact">formulaire de contact</a> puis nous vons contacterons dans les
                    plus brefs délais pour vous inscrire au sein du Training Center 4.0.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header collapsed" data-toggle="collapse" data-target="#collapse-04">
                <h3>Où se situe le Training Center 4.0 ?</h3>
              </div>
              <div class="collapse" id="collapse-04" data-parent="#accordion">
                <div class="accordion-body">
                  <p>À l'aérodrome de Melun Villaroche, à Montereau-sur-le-Jard, 77950</p>
                  <br>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50236.83156661273!2d2.6484609497713203!3d48.56679442490831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5fb7b3824bca1%3A0xcb4dffb41c4ad580!2sA%C3%A9rodrome%20de%20Melun%20Villaroche!5e0!3m2!1sfr!2sfr!4v1646993857757!5m2!1sfr!2sfr" width="850" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="chevron-btn">
        <a href="#moment"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
      </div>
    </div>
  </section>

  <!-- Actualités du moments -->

  <section class="moment section-padding" id="moment">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title">
            <h2>Actualités du moments</h2>
          </div>
        </div>
      </div>
      <br />
      <br /><br><br>
      <div class="row justify-content-center">
        <section class="posts">
          <div class="container posts__container">
              <?php while ($post = mysqli_fetch_assoc($posts)) : ?>
                  <article class="post">
                      <div class="post__thumbnail">
                          <img src="./images/<?= $post['thumbnail'] ?>" alt="">
                      </div>
                      <div class="post__info">
                          <?php
                          //fetch category from categories table using category_id of post
                          $category_id = $post['category_id'];
                          $category_query = "SELECT * FROM categories WHERE id= $category_id";
                          $category_result = mysqli_query($connexion, $category_query);
                          $category = mysqli_fetch_assoc($category_result);
                          $category_title = $category['title'];

                          ?>
                          <a href="#" class="category__button"><?= $category['title'] ?></a>
                          <h3> <a href="<?= ROOT_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                          </h3>
                          <p class="post__body">
                              <?= substr($post['body'], 0, 200) ?>...
                          </p>
                          <div class="post__author">
                              <div class="post__author-info">

                                  <small><?= date("M d, Y - H:i", strtotime($post['date_time'])) ?></small>
                              </div>
                          </div>
                      </div>
                  </article>
              <?php endwhile ?>
          </div>
        </section>
        <div class="about-btn">
            <a href="actu.php" class="btn btn-2">Voir nos actualités</a>
          </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="chevron-btn">
        <a href="#contact"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
      </div>
    </div>
  </section>

  <!--Contact-->

  <section class="contact section-padding" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title">
            <h2>Contactez-nous</h2>
          </div>
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-lg-4 col-md-5">
          <div class="contact-info">
            <h3>Pour toutes questions, n'hésitez pas !</h3>
            <div class="contact-info-item">
              <i class="fas fa-location-arrow"></i>
              <h4>Localisation</h4>
              <p>Aérodrome de Melun Villaroche 77950 Montereau-sur-le-Jard</p>
            </div>
            <div class="contact-info-item">
              <i class="fas fa-envelope"></i>
              <h4>Écrivez-nous au</h4>
              <p>trainingcenter@parisvillaroche.com</p>
            </div>
            <div class="contact-info-item">
              <i class="fas fa-phone"></i>
              <h4>Appeler-nous au</h4>
              <p>01 60 68 11 44</p>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-7">
          <div class="contact-form">
            <form method="post">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" placeholder="Votre nom et prénom" name="nom" id="nom" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="mail" placeholder="Votre email" name="email" id="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="tel" placeholder="Votre téléphone" name="phone" id="phone" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" placeholder="Votre sujet" name="sujet" id="sujet" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea placeholder="Votre message" name="message" class="form-control"></textarea>
                  </div>
                </div>
              </div>
              <!-- <div class="row">
                <div class="col-lg-12">
                  <div class="g-recaptcha" data-sitekey="6Lf_S8cgAAAAACyb2oa3adJdNfTRu5oWhIDfHCOc"></div>
                </div>
              </div> -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <button type="submit" id="btn-submit" name="submitpost" class="btn-button">Envoyer</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  if (isset($_POST['message'])) {
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From:' . $_POST["email"] . "\r\n";
    $entete .= 'Reply-to: ' . $_POST['email'] ."\r\n";

    $entete2  = 'MIME-Version: 1.0' . "\r\n";
    $entete2 .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete2 .= 'From:trainingcenter@parisvillaroche.com' . "\r\n";
    
    
    $message = '
    <html>
    <head>
    
    <style type="text/css">
        body {
            margin: 0;
            background-color: #cccccc;
        }
        table {
            border-spacing: 0;
        }
        td {
            padding: 0;
        }
        img {
            border: 0;
            
        }
        .wrapper{
            width: 100%;
            table-layout: fixed;
            background-color: #cccccc;
            padding-bottom: 40px;
        }

        .main{
            background-color: #fff;
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
            border-spacing: 0;
            font-family: sans-serif;
            color: #4a4a4a;
        }

        .two-columns{
            text-align: center;
            font-size: 0;
            padding: 40px 0;
        }

        .two-columns .column{
            width: 100%;
            max-width: 300px;
            display: inline-block;
            vertical-align: top;
        }

        .two-columns .padding{
            padding: 20px;
        }

        .two-columns .content{
            text-align: left;
            font-size: 15px;
            line-height: 20px;
        }

        .icons{
            letter-spacing: 15px;
        }

        a{
            text-decoration: none;
            color: #273c75;
        }



        @media screen and (max-width: 600px) { 
            .two-columns .content img{
                width: 300px!important;
                max-width: 300px!important;
            }

            .padding{
                padding-right: 0!important;
                padding-left: 0!important;
            }
            
        }
    </style>
    </head>
    <body>
        <center class="wrapper">
            <table class="main" width="100%">

                


    <!-- SOCIAL MEDIA ICONS -->
                <tr>
                    <td>
                        <table width="100%">
                            <tr>
                                <td class="icons" style="background-color: #273c75;padding: 8px 0 5px;text-align: center;">
                                    <a href="https://m.facebook.com/trainingcentersympav/"><img src="https://i.ibb.co/L9sHFmR/facebook.png" alt="Logo" width="30"></a>

                                    <a href="https://www.instagram.com/trainingcenter4.0/"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Logo" width="30"></a>

                                    <a href="https://twitter.com/TCenter4_0/"><img src="https://i.ibb.co/JdSrFBW/twitter.png" alt="Logo" width="30"></a>

                                    <a href="https://www.youtube.com/channel/UCqan073e4fkLA_HtG_uWk8Q"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="Logo" width="30"></a>

                                    <a href="https://www.linkedin.com/in/tcenter-sympav-28bb571a3/"><img src="https://i.ibb.co/JRCM0mn/linkedin.png" alt="Logo" width="30"></a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            


    <!-- LOGO SECTION -->
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td style="text-align: center;padding: 10px;">
                                <a href="#"><img src="https://www.parisvillaroche.com/themes/thegobeliners/images/logo-tc4.png" alt="Logo" width="120" title="Logo"></a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>


    <!-- GIF BANNER IMAGE -->
            <tr>
                <td>
                    <a href="https://ibb.co/X41hhwF"><img src="https://i.ibb.co/VNR77KM/IMG-20210912-WA0006.jpg" alt="Banner" width="600" style="max-width: 100%;"></a>
                </td>
            </tr> 
            


    <!-- TITLE, TEXT & BUTTON -->
            <tr>
                <td style="padding-bottom: 40px;">
                    <table width="100%">
                        <tr>
                            <td style="text-align: center;padding: 15px;">
                                <p style="font-size: 20px;font-weight: bold;color: #273c75;;">Message de '  . $_POST["nom"] . '</p>
                                <p style="text-align: justify;font-size: 15px; line-height: 23px; padding: 5px 0 15px;color: #273c75;">' . htmlspecialchars($_POST['message']) . '</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>


    <!-- BLUE BORDER -->
            <tr>
                <td height="5" style="background-color: #273c75;"></td>
            </tr>


    <!-- TWO COLUMN SECTION -->
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td class="two-columns">
                                <table class="column">
                                    <tr>
                                        <td class="padding">
                                            <table class="content">
                                                <tr>
                                                    <td>
                                                        <a href="https://ibb.co/yfKdX5M"><img src="https://i.ibb.co/xCwXDGc/IMG-20210912-WA0046.jpg" alt="" width="260" style="max-width: 260;"></a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>


                                <table class="column">
                                    <tr>
                                        <td class="padding">
                                            <table class="content">
                                                <tr>
                                                    <td>
                                                        <p style="font-size: 17px;font-weight: bold;color: #273c75;">Informations complémentaires</p>
                                                        <p style="padding-bottom: 15px;color: #273c75;">Email: '  . $_POST['email'] . '</p>
                                                        <p style="padding-bottom: 15px;color: #273c75;">Téléphone: '  . $_POST['phone'] . '</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>


    <!-- BLUE BACKGROUND QUOTE -->
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td style="text-align: center;background-color: #273c75;padding: 15px;color: #ffffff;font-size: 18px;">
                                <p style="font-weight: bold;">"Ce message vous a été envoyé via la page contact du site du Training Center 4.0"</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>


    <!-- FOOTER SECTION -->
            <tr>
                <td style="background-color: #efefef;">
                    <table width="100%">
                        <tr>
                            <td style="padding: 30px 10px;text-align: center;">
                                <a href="#"><img src="https://www.parisvillaroche.com/themes/thegobeliners/images/logo-tc4.png" alt="Logo" width="150" title="Logo"></a>
                                <p style="color: #273c75;font-weight:600;">Aérodrome de Melun Villaroche 77950 Montereau-sur-le-Jard</p>
                                <p style="color: #273c75;"><a href="mailto:trainingcenter@parisvillaroche.com">trainingcenter@parisvillaroche.com</a></p>
                            </td>
                        </tr>

                        <tr>
                            <td height="10" style="background-color: #273c75;"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            </table>
        </center>

    </body>
    </html>';

    $message2 = '<html>
    <head>
    
    <style type="text/css">
        body {
            margin: 0;
            background-color: #cccccc;
        }
        table {
            border-spacing: 0;
        }
        td {
            padding: 0;
        }
        img {
            border: 0;
            
        }
        .wrapper{
            width: 100%;
            table-layout: fixed;
            background-color: #cccccc;
            padding-bottom: 40px;
        }

        .main{
            background-color: #fff;
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
            border-spacing: 0;
            font-family: sans-serif;
            color: #4a4a4a;
        }

        .two-columns{
            text-align: center;
            font-size: 0;
            padding: 40px 0;
        }

        .two-columns .column{
            width: 100%;
            max-width: 300px;
            display: inline-block;
            vertical-align: top;
        }

        .two-columns .padding{
            padding: 20px;
        }

        .two-columns .content{
            text-align: left;
            font-size: 15px;
            line-height: 20px;
        }

        .icons{
            letter-spacing: 15px;
        }

        a{
            text-decoration: none;
            color: #273c75;
        }



        @media screen and (max-width: 600px) { 
            .two-columns .content img{
                width: 300px!important;
                max-width: 300px!important;
            }

            .padding{
                padding-right: 0!important;
                padding-left: 0!important;
            }
            
        }
    </style>
    </head>
    <body>
        <center class="wrapper">
            <table class="main" width="100%">

                
    <!-- BLUE BORDER -->
    <tr>
        <td height="45" style="background-color: #273c75;"></td>
    </tr>


   
            


    <!-- LOGO SECTION -->
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td style="text-align: center;padding: 10px;">
                                <a href="#"><img src="https://www.parisvillaroche.com/themes/thegobeliners/images/logo-tc4.png" alt="Logo" width="120" title="Logo"></a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

    <!-- TITLE, TEXT & BUTTON -->
            <tr>
                <td style="padding-bottom: 40px;">
                    <table width="100%">
                        <tr>
                            <td style="text-align: center;padding: 15px;">
                                <p style="font-size: 20px;font-weight: bold;color: #273c75;;">Bonjour, '  . $_POST["nom"] . '!</p>
                                <p style="text-align: center;font-size: 15px; line-height: 23px; padding: 5px 0 15px;color: #273c75;">Nous vous remercions de nous avoir contacté via notre site. <br>
                                Nous vous contacterons dans les plus brefs délais.</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>



            <!-- SOCIAL MEDIA ICONS -->
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td class="icons" style="background-color: #273c75;padding: 8px 0 5px;text-align: center;">
                                <a href="https://m.facebook.com/trainingcentersympav/"><img src="https://i.ibb.co/L9sHFmR/facebook.png" alt="Logo" width="30"></a>

                                <a href="https://www.instagram.com/trainingcenter4.0/"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Logo" width="30"></a>

                                <a href="https://twitter.com/TCenter4_0/"><img src="https://i.ibb.co/JdSrFBW/twitter.png" alt="Logo" width="30"></a>

                                <a href="https://www.youtube.com/channel/UCqan073e4fkLA_HtG_uWk8Q"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="Logo" width="30"></a>

                                <a href="https://www.linkedin.com/in/tcenter-sympav-28bb571a3/"><img src="https://i.ibb.co/JRCM0mn/linkedin.png" alt="Logo" width="30"></a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>


    
            </table>
        </center>

    </body>
    </html>';


    $retour = mail('trainingcenter@parisvillaroche.com', $_POST["sujet"], $message, $entete);
    $retour2 = mail($_POST["email"],'Training Center 4.0', $message2, $entete2);


    
}
  
  ?>


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
              <a href="https://m.facebook.com/trainingcentersympav/" target="_blank" class="footer__social">
                <i class="fa fa-facebook-official"></i>
              </a>
              <a href="https://twitter.com/TCenter4_0/" target="_blank" class="footer__social">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="https://www.instagram.com/trainingcenter4.0/" target="_blank" class="footer__social">
                <i class="fa fa-instagram"></i>
              </a>
              <a href="https://www.youtube.com/channel/UCqan073e4fkLA_HtG_uWk8Q" target="_blank" class="footer__social">
                <i class="fa fa-youtube-play"></i>
              </a>
              <a href="https://www.linkedin.com/in/tcenter-sympav-28bb571a3/" target="_blank" class="footer__social">
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
            <a class="mail" href="mailto:trainingcenter@parisvillaroche.com" class="footer__link">trainingcenter@ <br>
              parisvillaroche.com
            </a>
            <br>
            <a class="mail" href="tel:+33757079455" class="footer__link">01 60 68 11 44</a>
          </div>
        </div>

        <!--<div class="col-lg-3 col-md-6">
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
   <!--sweetalert-->
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php 
        if($retour){
            ?>      
                <script>
                    swal({
                        title:"Merci !",
                        text: "L'email a bien été envoyé au Training Center 4.0 !",
                        icon: "success",
                        button: "ok!",
                    });
                </script>
        <?php
        }
    ?>
    <script>
        $("#btn-submit").click(function(){
            // e.preventDefault();
            let nom = $("#nom").val();
            let prenom = $("#prenom").val();
            let email = $("#email").val();
            let phone = $("#phone").val();
            let sujet = $("#sujet").val();

            if(nom == '' || prenom == '' || email == '' || phone == '' || sujet == ''){
                swal({
                    title: "Oups!",
                    text: "L'email n'a pas bien été envoyé !!",
                    icon: "error",
                    button: "ok",
                });

            }
        });
    </script>
</body>

</html>