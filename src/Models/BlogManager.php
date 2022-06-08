<?php


namespace Eologie\Models;


class BlogManager
{
    private \PDO $bdd;

    public function __construct()
    {
        $this->bdd = new \PDO('mysql:host=' . HOST . ';dbname=' . DATABASE . ';charset=utf8;', USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    /**
     * @return bool|array
     */
    public function getArticles()
    {
        $stmt = $this->bdd->prepare("SELECT id_user, id_article, titre, date_creation, contenu, image, user.username  FROM article LEFT JOIN user ON user.id = article.id_user");
        $stmt->execute(array());
        return $stmt->fetchAll(\PDO::FETCH_CLASS, "Eologie\Models\article");
    }

    /**
     * @param $slug
     * @return array|false
     */
    public
    function getArticle($slug)
    {
        $stmt = $this->bdd->prepare("SELECT id_user, id_article, titre, date_creation, contenu, image, user.username FROM article LEFT JOIN user ON user.id = article.id_user where id_article = :id_article");
        $stmt->execute(array('id_article' => $slug));
        return $stmt->fetchAll(\PDO::FETCH_CLASS, "Eologie\Models\article");
    }

    /**
     * @param $slug
     * @return array|false
     */
    public function getMyArticles($slug)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM article WHERE id_user = :id_user");
        $stmt->execute(array('id_user' => $slug));
        return $stmt->fetchAll(\PDO::FETCH_CLASS, "Eologie\Models\article");
    }

    /**
     * @param $slug
     */
    public function deleteArticle($slug)
    {
        $stmt = $this->bdd->prepare('SELECT image from article where id_article = ?');
        $stmt->execute(array($slug));
        $stmt2 = $this->bdd->prepare("DELETE from article where id_article = ?");
        $stmt2->execute(array($slug));
        $image = $stmt->fetchAll(\PDO::FETCH_CLASS, "Eologie\Models\article");
        unlink('./Images/ImgBlog/' . $image[0]->getImage());
    }

    /**
     * @param $slug
     */
    public function checkImg($slug)
    {
        $extensionsPossibles = ['jpg', 'jpeg', 'png', 'gif', 'tif'];
        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $id = uniqid();
        if (!in_array($extension, $extensionsPossibles)) {
            $_SESSION['message'] = 'L\'image doit être de type jpg, jpeg, png, gif ou tif.';
            header('Location: /createArticle');
            return;
        }
        move_uploaded_file($_FILES['image']['tmp_name'], './Images/ImgBlog/' . $id . '.' . $extension);
        $img = $id . '.' . $extension;
        $stmt = $this->bdd->prepare("INSERT INTO article (id_user, titre, date_creation, contenu, image) VALUES (:id_user, :titre, :date_creation, :contenu, :image)");
        $stmt->execute(array("id_user" => $_SESSION['user']['id'], "titre" => htmlspecialchars($_POST['title']), 'date_creation' => date('d,m,y'), 'contenu' => htmlspecialchars($_POST['content']), 'image' => $img));
        $_SESSION['message'] = 'L\'article à été créé !';
        header('Location: /blog');
    }
}