<?php


namespace Eologie\Controllers;

use Eologie\Validator;
use Eologie\Models\Blog;
use Eologie\Models\BlogManager;

class BlogController
{
    private BlogManager $manager;
    private Validator $validator;

    public function __construct()
    {
        $this->manager = new BlogManager();
        $this->validator = new Validator();
    }

    public function showBlog()
    {
        $articles = $this->manager->getArticles();
        $title = 'Blog';
        require VIEWS . 'blog.php';
    }

    /**
     * @param $slug
     */
    public function deleteArticle($slug)
    {
        $article = $this->manager->getArticle($slug);
        if (isset($_SESSION['user']) && $_SESSION['user']['id'] == $article[0]->getIdUser()) {
            $this->manager->deleteArticle($slug);
            $_SESSION['message'] = 'Votre article à bien été supprimé !';
            header('Location:/blog');
        } else {
            $_SESSION['error']['logged'] = "Vous ne pouvez pas accéder à cette page sans être connecté!";
            echo $_SESSION['error']['logged'] . '<br>
            Retournez à la page d\'accueil en cliquant <a href="homepage">ici</a>';
        }
    }

    public function myArticles()
    {
        if (isset($_SESSION['user'])) {
            $myArticles = $this->manager->getMyArticles($_SESSION['user']['id']);
            $title = 'Mes articles';
            require VIEWS . 'myArticles.php';
        } else {
            $_SESSION['error']['logged'] = "Vous ne pouvez pas accéder à cette page sans être connecté!";
            echo $_SESSION['error']['logged'] . '<br />
            Retournez à la page d\'accueil en cliquant <a href="homepage">ici</a>';
        }
    }

    //Affiche la page de création d'article
    public function showCreate()
    {
        if (isset($_SESSION['user'])) {
            $title = 'Création d\'article';
            require VIEWS . 'create.php';
        }
    }

    //Fonction permettant de créer un article
    public function createArticle()
    {
        if (isset($_SESSION['user']) && isset($_POST['title']) && isset($_POST['content']) && isset($_FILES['image']['name']) && !empty($_POST['title']) && !empty($_POST['content']) && !empty($_FILES['image']['name'])) {
            $img = $this->manager->checkImg($_FILES['image']);
        }
    }


    /**
     * @param $slug
     */
    //Méthode permettant d'afficher la vue "editArticle" permettant de modifier un article
    public function showEdit($slug)
    {
        //Vérifie que l'utilisateur est connecté et que l'id_article est bien récupéré
        if (isset($_SESSION['user']) && $slug) {
            //Récupère l'article à afficher dans la BDD
            $article = $this->manager->getArticle($slug);
            //Initialise une variable contenant le titre de la page
            $title = 'Modification d\'article';
            //Appelle la vue "editArticle"
            require VIEWS . 'editArticle.php';
        }
    }

    public function editArticle()
    {
        print_r($_POST);
        print_r($_FILES);
        if (isset($_SESSION['user'])) {
            if ($_FILES['image']['error'] == 4) {//Si l'utilisateur n'a pas enregistré de nouvelle image

            }
        }
    }
}