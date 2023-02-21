<!DOCTYPE html>
<html lang="en">

<head>
  <title>Training Center 4.0</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/svg+xml">
  <!--lightbox-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css"
    type="text/css" />
  <!-- owl carousel css -->
  <link rel="stylesheet" href="./css/owl.carousel.min.css">
  <!-- font awesome icons -->
  <link rel="stylesheet" href="./css/font-awesome.css">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <!-- main css -->
  <link rel="stylesheet" href="./css/style.css">
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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"
      style="margin: 0 70px;">
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
    style="background-image: url('./images/apprentissages/_1010510.jpg');  background-size: cover; height: 80vh; min-height: 300px; position: relative; color: var(--white); text-shadow: var(--shadow-black-100); ">
    <div class="color-overlay d-flex justify-content-center align-items-center" style="position: absolute; 
      width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.4); ">
      <h1 style="font-size: 4rem;">Galerie</h1>
    </div>
  </section>


  <!--Galerie-->
  <section class="galerie section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title">
            <h2>Voici notre galerie d'images</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div id="project" class="d-flex justify-content-center align-items-center flex-column"
          style="margin: 50px auto;">

          <ul class="project-filter d-flex justify-content-center align-items-center flex-wrap" style="margin: 20px;
                    border-radius: 15px;">
            <li class="list project-filter-active" style=" background-color: var(--royal-blue-dark);
            color: #fff;
            border-radius: 5px; margin: 10px;
                        padding: 5px 20px;
                        letter-spacing: 0.5px;
                        font-weight: 400;
                        cursor: pointer;
                        user-select: none;" data-filter="tous">Tous</li>
            <li class="list project-filter" style=" margin: 10px;
                        padding: 5px 20px;
                        letter-spacing: 0.5px;
                        font-weight: 400;
                        cursor: pointer;
                        user-select: none;" data-filter="TC">Training Center 4.0</li>
            <li class="list project-filter" style=" margin: 10px;
            padding: 5px 20px;
            letter-spacing: 0.5px;
            font-weight: 400;
            cursor: pointer;
            user-select: none;" data-filter="LDV">Leonard-de-Vinci</li>

            <li class="list project-filter" data-filter="FF" style=" margin: 10px;
            padding: 5px 20px;
            letter-spacing: 0.5px;
            font-weight: 400;
            cursor: pointer;
            user-select: none;">French fab</li>

            <li class="list project-filter" data-filter="AL" style=" margin: 10px;
            padding: 5px 20px;
            letter-spacing: 0.5px;
            font-weight: 400;
            cursor: pointer;
            user-select: none;">Air-Legend</li>
          </ul>

          <div class="project-container d-flex justify-content-center align-items-center flex-wrap " style=" max-width: 1200px;
          margin: auto;">

            <!--Inauguration 2023-->
            <!-- <a href="./images/photo atelier/479.jpeg" class="project-box TC" data-lightbox="gallery"
            data-title="" style="width: 330px;
            padding: 15px;
            border: 1px solid var(--bg-color);
            margin: 20px;">
            <img src="./images/photo atelier/479.jpeg" alt="" style=" width: 80%;
            height: 100%;
            overflow: hidden;
            border-radius: 5px;">
          </a>
            <a href="./images/photo atelier/480.jpeg" class="project-box TC" data-lightbox="gallery"
            data-title="" style="width: 330px;
            padding: 15px;
            border: 1px solid var(--bg-color);
            margin: 20px;">
            <img src="./images/photo atelier/480.jpeg" alt="" style=" width: 80%;
            height: 100%;
            overflow: hidden;
            border-radius: 5px;">
          </a>
            <a href="./images/photo atelier/482.jpeg" class="project-box TC" data-lightbox="gallery"
            data-title="" style="width: 330px;
            padding: 15px;
            border: 1px solid var(--bg-color);
            margin: 20px;">
            <img src="./images/photo atelier/482.jpeg" alt="" style=" width: 80%;
            height: 100%;
            overflow: hidden;
            border-radius: 5px;">
          </a>
            <a href="./images/photo atelier/481.jpeg" class="project-box TC" data-lightbox="gallery"
            data-title="" style="width: 330px;
            padding: 15px;
            border: 1px solid var(--bg-color);
            margin: 20px;">
            <img src="./images/photo atelier/481.jpeg" alt="" style=" width: 80%;
            height: 100%;
            overflow: hidden;
            border-radius: 5px;">
          </a> -->
            <a href="./images/inau2022/20220708_143010.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/inau2022/20220708_143010.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;">
            </a>
            <a href="./images/inau2022/20220708_143727.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/inau2022/20220708_143727.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;">
            </a>
            <a href="./images/inau2022/20220708_143746.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/inau2022/20220708_143746.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;">
            </a>
            <a href="./images/inau2022/20220708_143817.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/inau2022/20220708_143817.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;">
            </a>
            <a href="./images/inau2022/20220708_150345.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/inau2022/20220708_150345.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;">
            </a>
            <a href="./images/inau2022/inau2022.jpg" class="project-box TC" data-lightbox="gallery" data-title=""
              style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/inau2022/inau2022.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;">
            </a>
            <!--Inauguration 2023 FIN-->
            <!--photo Atelier-->
            <a href="./images/photo atelier/_MG_1778.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
            padding: 15px;
            border: 1px solid var(--bg-color);
            margin: 20px;">
              <img src="./images/photo atelier/_MG_1778.jpg" alt="" style=" width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 5px;"></a>

            <a href="./images/photo atelier/_MG_1781.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
            padding: 15px;
            border: 1px solid var(--bg-color);
            margin: 20px;">
              <img src="./images/photo atelier/_MG_1781.jpg" alt="" style=" width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 5px;"></a>

            <a href="./images/photo atelier/_MG_1788.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
            padding: 15px;
            border: 1px solid var(--bg-color);
            margin: 20px;">
              <img src="./images/photo atelier/_MG_1788.jpg" alt="" style=" width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 5px;"></a>

            <a href="./images/photo atelier/_MG_1790.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
            padding: 15px;
            border: 1px solid var(--bg-color);
            margin: 20px;">
              <img src="./images/photo atelier/_MG_1790.jpg" alt="" style=" width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 5px;"></a>

            <a href="./images/photo atelier/_MG_1793.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
            padding: 15px;
            border: 1px solid var(--bg-color);
            margin: 20px;">
              <img src="./images/photo atelier/_MG_1793.jpg" alt="" style=" width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 5px;"></a>

            <a href="./images/photo atelier/_MG_1795.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
            padding: 15px;
            border: 1px solid var(--bg-color);
            margin: 20px;">
              <img src="./images/photo atelier/_MG_1795.jpg" alt="" style=" width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 5px;"></a>

            <a href="./images/photo atelier/_MG_1796.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/photo atelier/_MG_1796.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;"></a>

            <a href="./images/photo atelier/_MG_1799.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/photo atelier/_MG_1799.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;"></a>

            <a href="./images/photo atelier/_MG_1802.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/photo atelier/_MG_1802.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;"></a>

            <a href="./images/photo atelier/_MG_1807.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/photo atelier/_MG_1807.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;"></a>

            <a href="./images/photo atelier/_MG_1810.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/photo atelier/_MG_1810.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;"></a>

            <a href="./images/photo atelier/_MG_1812.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/photo atelier/_MG_1812.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;"></a>

            <a href="./images/photo atelier/_MG_1816.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/photo atelier/_MG_1816.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;"></a>
            <a href="./images/photo atelier/_MG_1818.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/photo atelier/_MG_1818.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;"></a>
            <a href="./images/photo atelier/_MG_1837.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/photo atelier/_MG_1837.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;"></a>
            <a href="./images/photo atelier/_MG_1848.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/photo atelier/_MG_1848.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;"></a>
            <a href="./images/photo atelier/_MG_1929.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/photo atelier/_MG_1929.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;"></a>
            <a href="./images/photo atelier/_MG_1920.jpg" class="project-box TC" data-lightbox="gallery"
              data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/photo atelier/_MG_1920.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;"></a>

            <!--Léonard-de-Vinci-->
            <a href="./images/LDV/img-ldv-3.JPEG" class="project-box LDV" data-lightbox="gallery" data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images//LDV/img-ldv-3.JPEG" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;"></a>
            <a href="./images/photo atelier/_MG_1947.jpg" class="project-box LDV" data-lightbox="gallery" data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/photo atelier/_MG_1947.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;"></a>
            <a href="./images/photo atelier/_MG_1949.jpg" class="project-box LDV" data-lightbox="gallery" data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/photo atelier/_MG_1949.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;"></a>
            <a href="./images/photo atelier/_MG_1960.jpg" class="project-box LDV" data-lightbox="gallery" data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/photo atelier/_MG_1960.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;"></a>
            <a href="./images/photo atelier/_MG_1962.jpg" class="project-box LDV" data-lightbox="gallery" data-title="" style="width: 330px;
              padding: 15px;
              border: 1px solid var(--bg-color);
              margin: 20px;">
              <img src="./images/photo atelier/_MG_1962.jpg" alt="" style=" width: 100%;
              height: 100%;
              overflow: hidden;
              border-radius: 5px;"></a>
               <a href="./images/photo atelier/_MG_1970.jpg" class="project-box LDV" data-lightbox="gallery" data-title="" style="width: 330px;
               padding: 15px;
               border: 1px solid var(--bg-color);
               margin: 20px;">
               <img src="./images/photo atelier/_MG_1970.jpg" alt="" style=" width: 100%;
               height: 100%;
               overflow: hidden;
               border-radius: 5px;"></a>
                <a href="./images/photo atelier/_MG_1962.jpg" class="project-box LDV" data-lightbox="gallery" data-title="" style="width: 330px;
                padding: 15px;
                border: 1px solid var(--bg-color);
                margin: 20px;">
                <img src="./images/photo atelier/_MG_1962.jpg" alt="" style=" width: 100%;
                height: 100%;
                overflow: hidden;
                border-radius: 5px;"></a>
                 <a href="./images/photo atelier/_MG_1983.jpg" class="project-box LDV" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/photo atelier/_MG_1983.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>
               <a href="./images/photo atelier/_MG_1985.jpg" class="project-box LDV" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/photo atelier/_MG_1985.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>
               <a href="./images/photo atelier/IMG-promo4-1.jpg" class="project-box LDV" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/photo atelier/IMG-promo4-1.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>
               <a href="./images/photo atelier/IMG-promo4-2.jpg" class="project-box LDV" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/photo atelier/IMG-promo4-2.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <!--French Fab-->
                 <a href="./images/photos French Fab Tour/_MG_5102.jpg" class="project-box FF" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/photos French Fab Tour/_MG_5102.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/photos French Fab Tour/_MG_5137.jpg" class="project-box FF" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/photos French Fab Tour/_MG_5137.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/photos French Fab Tour/_MG_5140.jpg" class="project-box FF" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/photos French Fab Tour/_MG_5140.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>
                 
                 <a href="./images/photos French Fab Tour/_MG_5162.jpg" class="project-box FF" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/photos French Fab Tour/_MG_5162.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/photos French Fab Tour/_MG_5229.jpg" class="project-box FF" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/photos French Fab Tour/_MG_5229.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>
                 
                 <a href="./images/photos French Fab Tour/_MG_5251.jpg" class="project-box FF" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/photos French Fab Tour/_MG_5251.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>
                 
                 <a href="./images/photos French Fab Tour/_MG_5275.jpg" class="project-box FF" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/photos French Fab Tour/_MG_5275.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/photos French Fab Tour/_MG_5298.jpg" class="project-box FF" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/photos French Fab Tour/_MG_5298.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/photos French Fab Tour/_MG_5300.jpg" class="project-box FF" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/photos French Fab Tour/_MG_5300.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/photos French Fab Tour/_MG_5365.jpg" class="project-box FF" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/photos French Fab Tour/_MG_5365.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>
                 
                 <a href="./images/photos French Fab Tour/_MG_5668.jpg" class="project-box FF" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/photos French Fab Tour/_MG_5668.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/photos French Fab Tour/_MG_5669.jpg" class="project-box FF" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/photos French Fab Tour/_MG_5669.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>
                 

                 <!--AIR-LEGEND-->

                 <a href="./images/air-legend/IMG-20210912-WA0003.jpg" class="project-box AL" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/air-legend/IMG-20210912-WA0003.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/air-legend/IMG-20210912-WA0004.jpg" class="project-box AL" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/air-legend/IMG-20210912-WA0004.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/air-legend/IMG-20210912-WA0006.jpg" class="project-box AL" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/air-legend/IMG-20210912-WA0006.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/air-legend/IMG-20210912-WA0007.jpg" class="project-box AL" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/air-legend/IMG-20210912-WA0007.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/air-legend/IMG-20210912-WA0015.jpg" class="project-box AL" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/air-legend/IMG-20210912-WA0015.jpg" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/air-legend/img-air-1.JPEG" class="project-box AL" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/air-legend/img-air-1.JPEG" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/air-legend/img-air-2.JPEG" class="project-box AL" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/air-legend/img-air-2.JPEG" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/air-legend/img-air-5.JPEG" class="project-box AL" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/air-legend/img-air-5.JPEG" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/air-legend/img-air-6.JPEG" class="project-box AL" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/air-legend/img-air-6.JPEG" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 
                 <a href="./images/air-legend/img-air-8.JPEG" class="project-box AL" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/air-legend/img-air-8.JPEG" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/air-legend/img-air-9.JPEG" class="project-box AL" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/air-legend/img-air-9.JPEG" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/air-legend/img-air-11.JPEG" class="project-box AL" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/air-legend/img-air-11.JPEG" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/air-legend/P1000227.JPG" class="project-box AL" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/air-legend/P1000227.JPG" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 <a href="./images/air-legend/P1000228.JPG" class="project-box AL" data-lightbox="gallery" data-title="" style="width: 330px;
                 padding: 15px;
                 border: 1px solid var(--bg-color);
                 margin: 20px;">
                 <img src="./images/air-legend/P1000228.JPG" alt="" style=" width: 100%;
                 height: 100%;
                 overflow: hidden;
                 border-radius: 5px;"></a>

                 

           
         
           
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
  <script src="js/lightbox.js"></script>
  <script type="text/javascript">
    $(document).on('click', '.project-filter li', function () {
      $(this).addClass('project-filter-active').siblings().removeClass('project-filter-active');
    });

    $(document).ready(function () {
      $('.list').click(function () {

        const value = $(this).attr('data-filter');

        if (value == 'tous') {
          $('.project-box').show('1000');
        } else {
          $('.project-box').not('.' + value).hide('1000');
          $('.project-box').filter('.' + value).show('1000');
        }
      });
    });
  </script>
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