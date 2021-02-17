<?php
    require_once '../config/routes.php';
    require_once '../lib/vendor/autoload.php';
    require_once '../src/controleur/_controleur.php';
    require_once '../src/controleur/accueilControleur.php';
    require_once '../src/controleur/formulaireControleur.php';

    $loader = new \Twig\Loader\FilesystemLoader('../src/vue/'); 
    $twig = $twig = new \Twig\Environment($loader, []);

    $contenu = getPage();
    $contenu($twig);

?>