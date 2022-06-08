<?php


namespace Eologie\Controllers;


use Eologie\Models\UserManager;
use Eologie\Validator;

class UserController
{
    private UserManager $manager;
    private Validator $validator;

    public function __construct()
    {
        $this->manager = new UserManager();
        $this->validator = new Validator();
    }

    public function showLogin()
    {
        if (isset($_SESSION['user'])) {
            header('Location: /');
        } else {
            $title = 'Connexion';
            require VIEWS . 'login.php';
        }
    }

    public function showMonCompte()
    {
        if (isset($_SESSION['user'])) {
            $title = 'Mon compte';
            require VIEWS . 'monCompte.php';
        } else {
            header('Location: /');
        }
    }

    public function showRegister()
    {
        if (isset($_SESSION['user'])) {
            header('Location: /');
        } else {
            $title = 'Création de compte';
            require VIEWS . 'register.php';
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /');
    }

    public function register()
    {
        $res = $this->manager->find($_POST["email"], $_POST["username"]);
        if ($res === true) {
            $password = hash("SHA256", $_POST['password']);
            $this->manager->store($password);
            $_SESSION["error"]["message"] = 'Vous êtes bien enregistré, veuillez vous connecter';
            header("Location: /login");
        } else if ($res === 0) {
            $_SESSION["error"]['username'] = "Le pseudo choisi est déjà utilisé !";
            header("Location: /register");
        } else if ($res === 1) {
            $_SESSION["error"]['username'] = "L'email choisi est déjà utilisé !";
            header("Location: /register");
        }
    }

    public function login()
    {
        if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
            $res = $this->manager->findUser($_POST["username"]);
            $password = hash('SHA256', $_POST['password']);
            if ($password == $res->getPassword()) {
                $_SESSION["user"] = [
                    "id" => $res->getId(),
                    "username" => $res->getUsername(),
                    "email" => $res->getEmail()
                ];
                header("Location: /");
            } else {
                $_SESSION["error"]['message'] = "Identifiant ou mot de passe incorrect";
                header("Location: /login");
            }
        } else {
            $_SESSION["error"]['message'] = "Veuillez remplir tout les champs";
            header("Location: /login");
        }
    }
}