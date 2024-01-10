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

$home = new HomeController();
$category = new CategorieController();
$tag = new TagController();
$admin = new AdminController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch($action){
        case 'home':
            $home->ShowHome();
            break;
        case 'signUp':
            $home->ShowSignUp();
            break;
        case 'logIn':
            $home->ShowLogIn();
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
            $category->addTag();
            break;

        default:
            $home->ShowHome();
    }
} else {
    $home->ShowHome();
}
?>