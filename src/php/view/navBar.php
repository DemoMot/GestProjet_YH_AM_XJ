<!--
    Auteur : Yann Hofstetter
    Date : 07.12.2022
    Description : page qui permet de pouvoir afficher la barre de navigation sans devoir la mettre sur chaque page
-->

<!DOCTYPE html>
<html lang="fr">

    <!--la barre de navigation (importer depuis BootStrap)-->
    <header class="p-3 mb-3 border-bottom">
        <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none" href="#">
                <img src="../../resources/images/site_logo.png" width="32" height="32" alt="logo du site">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-dark">Accueil</a></li>
            
            <li><a href="#" class="nav-link px-2 link-secondary">Toutes les recettes</a></li>
            
            <li><a href="#" class="nav-link px-2 link-secondary">Nous contacter</a></li>
            
            </ul>
            
            <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="resources/images/login_logo.png" alt="login_logo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small">
                <?php
                    //regarde si l'utilisateur est connecté pour afficher ou non l'option pour acceder au profil
                    if (isset($_SESSION["isConnected"]))
                    {
                ?>
                <li><a class="dropdown-item" href="#">Profil</a></li>
                <li><a class="dropdown-item" href="#">Historique de mes questions</a></li>
                <?php
                    }
                    else
                    {
                ?>
                <li><a class="dropdown-item" href="#">Historique des questions de tout les utilisateur</a></li>
                <?php
                    }
                    //regarde que l'utilisateur est admin pour afficher ou non l'option pour acceder à la page de toutes les questions
                    if (isset($_SESSION["isAdministrator"]))
                    {
                ?>
                <li><a class="dropdown-item" href="#">Questions des utilisateurs</a></li>
                <?php
                    }
                ?>
                <li><hr class="dropdown-divider"></li>
                
                <!--affiche le bouton pour se déconnecté du site-->
                <li><a class="dropdown-item" href="src/php/view/connection.php">Déconnexion</a></li>
            </ul>
            </div>
        </div>
        </div>
    </header>
</html>