<?php
require './config/database.php';
// fetch current user from database
if (isset($_SESSION['user-id'])) {
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT avatar FROM users WHERE id=$id ";
    $result = mysqli_query($connexion, $query);
    $avatar = mysqli_fetch_assoc($result);
}

//check login status
if (!isset($_SESSION['user-id'])) {
    header('location: ' . ROOT_URL . 'signin.php');
}

// fecth current user's posts from database
$current_user_id = $_SESSION['user-id'];

$query = "SELECT posts.id, posts.title, posts.category_id FROM posts JOIN users ON posts.author_id = users.id WHERE posts.author_id=$current_user_id ORDER BY posts.id DESC";

$posts = mysqli_query($connexion, $query);
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Tableau de bord</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="../css/font-awesome.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!--recapcha-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <!-- Brand -->
        <a class="navbar-brand" href="index.php"><img src="../images/UE4.0.png" alt="Logo du Training Center 4.0"
                width="150">
            <img src="../images/HASSTEC.PNG" alt="" width="80" style="margin-top: 78px;"></a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Nous Connaitre
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="partenaires.php">Partenaires</a>
                        <a class="dropdown-item" href="inscription.php">Inscriptions</a>
                        <a class="dropdown-item" href="#">Galerie</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../apprenti.php">Accompagnement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../actu.php">Actualit??s</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../learning.php">E-learning</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.paris-villaroche-training-center.parcours.pro/"
                        target="_blank">Plateforme</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Soft-skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php#contact.php">Contact</a>
                </li>
                <?php if (isset($_SESSION['user-id'])) : ?>
                    <li class="nav__profile nav-item">
                        <div class="avatar">
                            <img src="<?= ROOT_URL . 'images/' . $avatar['avatar'] ?>">
                        </div>
                        <ul>
                            <li><a href="<?= ROOT_URL ?>admin/dashboard.php">Dashboard</a></li>
                            <li><a href="<?= ROOT_URL ?>logout.php">Logout</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT_URL ?>signin.php">Connexion</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>

    </nav>

    <!--ImageBackground-->
    <section class="img-background"
        style="background-image: url('../images/apprentissages/_1010510.jpg');  background-size: cover; height: 80vh; min-height: 300px; position: relative; color: var(--white); text-shadow: var(--shadow-black-100); ">
        <div class="color-overlay d-flex justify-content-center align-items-center" style="position: absolute; 
      width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.4); ">
            <h1 style="font-size: 4rem;">Tableau de bord</h1>
        </div>
    </section>

    <section class="dashboard" style="margin-top: 170px;">
    <?php if (isset($_SESSION['add-post-success'])) : ?>
            <div class="alert__message success row justify-content-center" style="width: 60%; margin: 30px auto;">
                <p>
                    <?= $_SESSION['add-post-success'];
                    unset($_SESSION['add-post-success']);
                    ?>
                </p>
            </div>
        <?php elseif (isset($_SESSION['edit-post-success'])) : ?>
            <div class="alert__message success row justify-content-center" style="width: 60%; margin: 30px auto;">
                <p>
                    <?= $_SESSION['edit-post-success'];
                    unset($_SESSION['edit-post-success']);
                    ?>
                </p>
            </div>
        <?php elseif (isset($_SESSION['edit-post'])) : ?>
            <div class="alert__message error row justify-content-center" style="width: 60%; margin: 30px auto;">
                <p>
                    <?= $_SESSION['edit-post'];
                    unset($_SESSION['edit-post']);
                    ?>
                </p>
            </div>
        <?php elseif (isset($_SESSION['delete-post-success'])) : ?>
            <div class="alert__message error row justify-content-center" style="width: 60%; margin: 30px auto;">
                <p>
                    <?= $_SESSION['delete-post-success'];
                    unset($_SESSION['delete-post-success']);
                    ?>
                </p>
            </div>
        <?php endif ?>
        <div class="container dashboard__container">
            <button id="show__sidebar-btn" class="sidebar__toggle"><i class="fas fa-angle-right"></i></button>
            <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="fas fa-angle-left"></i></button>
            <aside>
                <ul>
                    <li><a href="add-post.php"><i class="fas fa-pen"></i>
                            <h5>Ajouter une actualit??</h5>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard.php" class="active"><i class="fas fa-id-card-alt"></i>
                            <h5>Liste des actualit??s</h5>
                        </a>
                    </li>
                    <?php if (isset($_SESSION['user_is_admin'])) : ?>
                        <li>
                            <a href="add-user.php"><i class="fas fa-user"></i>
                                <h5>Ajouter un utilisateur</h5>
                            </a>
                        </li>
                        <li>
                            <a href="manage-users.php"><i class="fas fa-users"></i>
                                <h5>Liste des utilisateurs</h5>
                            </a>
                        </li>
                        <li>
                            <a href="add-category.php"><i class="fas fa-edit"></i>
                                <h5>Ajouter une cat??gorie</h5>
                            </a>
                        </li>
                        <li>
                            <a href="manage-categories.php"><i class="fas fa-list-ul"></i>
                                <h5>Liste des cat??gories</h5>
                            </a>
                        </li>
                    <?php endif ?>
                </ul>
            </aside>
            <main class="container table-responsive">
                <h2>Tableau de bord</h2>
                
                <?php if (mysqli_num_rows($posts) > 0) : ?>
                <table class="table table-bordered">
                    <thread>
                        <tr>
                            <th>Titre</th>
                            <th>Cat??gorie</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thread>
                    <tbody>
                    <?php while ($post = mysqli_fetch_assoc($posts)) : ?>
                        <?php 
                            $category_id = $post['category_id'];
                            $category_query = "SELECT title FROM categories WHERE id=$category_id";
                            $category_result = mysqli_query($connexion, $category_query);
                            $category = mysqli_fetch_assoc($category_result);
                        ?>
                        <tr>
                            <td><?= $post['title'] ?></td>
                            <td><?= $category['title'] ?></td>
                            <td><a href="<?= ROOT_URL ?>admin/edit-post.php?id=<?= $post['id'] ?>" class="btn btn-success"><i class="fas fa-edit"></i></a></td>
                            <td><a href="<?= ROOT_URL ?>admin/delete-post.php?id=<?= $post['id'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>

                        </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
                <?php else : ?>
                    <div class="alert__message error row justify-content-center" style="width: 60%; margin: 30px auto;"><?= "Aucun posts " ?>
                    </div>
                <?php endif ?>
            </main>
        </div>
    </section>



    <!-- BAND -->

    <section class="band ">
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <img src="../images/img-partenaires/logo-ue.jpg" height="100" width="150" alt="">
                </div>
                <div class="slide">
                    <img src="../images/img-partenaires/REGION_IDF.jpg" height="100" width="200" alt="">
                </div>

                <div class="slide">
                    <img src="../images/img-partenaires/pole-emploi-2.jpg" height="100" width="130" alt="">
                </div>
                <div class="slide">
                    <img src="../images/img-partenaires/melun.jpg" height="100" width="110" alt="">
                </div>
                <div class="slide">
                    <img src="../images/img-partenaires/PREF77.jpg" height="100" width="100" alt="">
                </div>
                <div class="slide">
                    <img src="../images/img-partenaires/AIF.jpg" height="100" width="120" alt="">
                </div>

                <div class="slide">
                    <img src="../images/img-partenaires/FF.png" height="100" width="190" alt="">
                </div>
                <div class="slide">
                    <img src="../images/img-partenaires/EOZ.jpg" height="100" width="190" alt="">
                </div>
                <div class="slide">
                    <img src="../images/img-partenaires/LdV.png" height="100" width="200" alt="">
                </div>
                <div class="slide">
                    <img src="../images/img-partenaires/htec.jpg" height="100" width="200" alt="">
                </div>
                <div class="slide">
                    <img src="../images/img-partenaires/cfa.png" height="100" width="200" alt="">
                </div>
                <div class="slide">
                    <img src="../images/img-partenaires/cam-system.png" height="100" width="200" alt="">
                </div>
                <div class="slide">
                    <img src="../images/img-partenaires/jbplogo.jpg" height="100" width="200" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-col">
                        <h3>Training Center 4.0</h3>
                        <p class="text-footer">P??le de ressources et d'accompagnement vers les m??tiers m??caniques
                            a??ronautiques et industriels soutenu par l'Europe.</p>
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
                <div class="col-lg-3 col-md-6">
                    <div class="footer-col props">
                        <h3>?? propos</h3>
                        <ul>
                            <li><a href="#">Accompagnement</a></li>
                            <li><a href="#">E-Learning</a></li>
                            <li><a href="#">Actualit??s</a></li>
                            <li><a href="#">Plateforme</a></li>
                            <!-- <li><a href="#">Soft-Skills</a></li> -->
                            <li><a href="#">Contact</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-col">
                        <h3>Informations</h3>
                        <p>A??rodrome de Melun Villaroche 77950 Montereau-sur-le-Jard</p>
                        <br>
                        <a class="mail" href="mailto:trainingcenter@parisvillaroche.com"
                            class="footer__link">trainingcenter@ <br>
                            parisvillaroche.com
                        </a>
                        <br>
                        <a class="mail" href="tel:+33757079455" class="footer__link">01 60 68 11 44</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-col">
                        <h3>Nos Politiques</h3>
                        <ul>
                            <li><a href="#">Politique d???utilisation des cookies</a></li>
                            <li><a href="#">Mentions l??gales</a></li>
                            <li><a href="#">Politique de confidentialit??</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright-text">&copy;2022 Training Center 4.0. Tous droits r??serv??s.</p>
                </div>
            </div>
        </div>
    </footer>


    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup scroll-up">
        <i class="fa fa-arrow-up scrollup__icon" aria-hidden="true"></i>
    </a>

    <!-- jquery js -->
    <script src="../js/jquery.min.js"></script>
    <!-- popper js -->
    <script src="../js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- ScrollIt js -->
    <script src="../js/scrollIt.min.js"></script>
    <!-- main js -->
    <script src="../js/main.js"></script>
</body>

</html>