<?php

namespace Eologie\Controllers;

use Eologie\Models\EologieManager;
use Eologie\Validator;

class EologieController
{
    private EologieManager $manager;
    private Validator $validator;

    public function __construct()
    {
        $this->manager = new EologieManager();
        $this->validator = new Validator();
    }

    //Affiche la page d'accueil
    public function showHomePage()
    {
        $title = 'Accueil';
        require VIEWS . 'homepage.php';
    }

    //Affiche la page fonctionnement
    public function showFonctionnement()
    {
        $title = 'Fonctionnement';
        require VIEWS . 'fonctionnement.php';
    }

    //Affiche la page contact
    public function showContact()
    {
        $title = 'Contact';
        require VIEWS . 'contact.php';
    }

    //Affiche la page le projet
    public function showLeProjet()
    {
        $title = 'Le projet';
        require VIEWS . 'leProjet.php';
    }

    public function contact()
    {
        if (isset($_POST['email']) && isset($_POST['contenu'])) {
            $_SESSION['contact'] = $_POST;
        } else {
            $_SESSION['contact'] = 'non';
        }
        header('Location:/');
    }
}