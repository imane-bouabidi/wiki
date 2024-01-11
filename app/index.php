<?php
include_once __DIR__ . '../controllers/categorieController.php';
include_once  __DIR__ . "../controllers/tagController.php";
include_once __DIR__ . "../controllers/userController.php";
include_once __DIR__ . "../controllers/wikiController.php";
include_once __DIR__ . "../models/categories/categorieDAO.php";
include_once __DIR__ . "../models/categories/categorie.php";
include_once __DIR__ . "../models/tag/tagDAO.php";
include_once __DIR__ . "../models/tag/tag.php";
include_once __DIR__ . "../models/user/userDAO.php";
include_once __DIR__ . "../models/user/user.php";
include_once __DIR__ . "../models/wiki/wikiDAO.php";
include_once __DIR__ . "../models/wiki/wiki.php";
include_once __DIR__ . "../controllers/homeController.php";
include_once __DIR__ . "../controllers/adminController.php";
include_once  __DIR__ . "..\models\config\connexion.php";
include_once  __DIR__ .  "..\models\config\db_config.php";
// include_once("");
session_start();
$home = new HomeController();
$category = new CategorieController();
$tag = new TagController();
$admin = new AdminController();
$wiki = new WikiController();
$user = new UserController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch($action){
        case 'home':
            $home->ShowHome();
            break;
        case 'signUp':
            $home->ShowSignUp();
            break;
        case 'logOut':
            $home->logOut();
            break;
        case 'authorDash':
            $home->ShowAuthorDash();
            break;
        case 'signUpSubmit':
            $user->addUser();
            break;
        case 'logIn':
            $home->ShowLogIn();
            break;
        case 'logInSubmit':
            $user->logInSubmit();
            break;
        case 'addwiki':
            $home->Showaddwiki();
            break;
        case 'detailsPoste':
            $home->ShowdetailsPoste();
            break;
        case 'adminDash':
            $admin->ShowTagsCat();
            break;
        case 'addCategory':
            $category->addCategory();
            break;
        case 'addTag':
            $tag->addTag();
            break;
        case 'updateCat':
            $category->updateCat();
            break;
        case 'deleteCat':
            $category->deleteCat();
            break;
        case 'deleteTag':
            $tag->deleteTag();
            break;
        case 'updateTag':
            $tag->updateTag();
            break;
        case 'addWiki':
            $wiki->addWiki();
            break;
        case 'wikiManagement':
            $admin->showWikis();
            break;
        case 'hideWiki':
            $wiki->hideWiki();
            break;
        case 'hideToShowWiki':
            $wiki->hideToShowWiki();
            break;
        case 'deleteWiki':
            $wiki->deleteWiki();
            break;
        case 'showUpdateWiki':
            $wiki->showUpdateWiki();
            break;
        case 'updateWiki':
            $wiki->UpdateWiki();
            break;

        default:
            $home->ShowHome();
    }
} else {
    $home->ShowHome();
}
?>