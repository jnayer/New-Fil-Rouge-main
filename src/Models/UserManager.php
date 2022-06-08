<?php


namespace Eologie\Models;


class UserManager
{
    private \PDO $bdd;

    public function __construct()
    {
        $this->bdd = new \PDO('mysql:host=' . HOST . ';dbname=' . DATABASE . ';charset=utf8;', USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getBdd(): \PDO
    {
        return $this->bdd;
    }

    public function findUser($username)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM user WHERE username = ?");
        $stmt->execute(array(
            $username
        ));
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "Eologie\Models\User");

        return $stmt->fetch();
    }

    public function findMail($email)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->execute(array(
            $email
        ));
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "Eologie\Models\User");

        return $stmt->fetch();
    }

    public function find($email, $username)
    {
        $mail = $this->findMail(htmlspecialchars($email));
        $user = $this->findUser(htmlspecialchars($username));
        if (empty($mail) && empty($user)) {
            return true;
        } else if (!empty($mail)) {
            return 1;
        } else if (!empty($user)) {
            return 0;
        }
    }

    public function store($password)
    {
        $stmt = $this->bdd->prepare("INSERT INTO user(username,email, password) VALUES (?, ?, ?)");
        $stmt->execute(array(
            $_POST["username"],
            $_POST["email"],
            $password
        ));
    }
}