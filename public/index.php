<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new Eologie\Router($_SERVER["REQUEST_URI"]);

$router->get('/', 'EologieController@showHomePage');
$router->get('/homepage', 'EologieController@showHomePage');
$router->get('/leFonctionnement', 'EologieController@showFonctionnement');
$router->get('/contact', 'EologieController@showContact');
$router->get('/leProjet', 'EologieController@showLeProjet');
$router->get('/login', 'UserController@showLogin');
$router->get('/register', 'UserController@showRegister');
$router->get('/blog', 'BlogController@showBlog');
$router->get('/logout', 'UserController@logout');
$router->get('/monCompte', 'UserController@showMonCompte');
$router->get('/deleteArticle/:idArticle/', 'BlogController@deleteArticle');
$router->get('/myArticles/', 'BlogController@myArticles');
$router->get('/createArticle/', 'BlogController@showCreate');
$router->get('/editArticle/:idArticle', 'BlogController@showEdit');

$router->post('/checkLogin/', 'UserController@login');
$router->post('/checkRegister/', 'UserController@register');
$router->post('/checkContact/', 'EologieController@contact');
$router->post('/checkCreateArticle/','BlogController@createArticle');
$router->post('/checkEditArticle/','BlogController@editArticle');

$router->run();