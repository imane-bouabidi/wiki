<?php
class AdminController {
    // public function addTag() {
    //     $nom = $_POST['tagName'];   
    //     $category = new TagDAO();
    //     $category->addTag($nom);
    // }
    public function ShowTagsCat() {
        $tags = new TagDAO();
        $tagsDATA = $tags->getAllTags();
        $cats = new CategoryDAO();
        $catsDATA = $cats->getAllCategories();
        include_once 'views\adminDashboard.php';
    }
    public function showWikis() {
        $wikis = new WikiDAO();
        $wikisDATA = $wikis->getAllWikis();
        $cats = new CategoryDAO();
        $catsDATA = $cats->getAllCategories();
        include_once 'views\manageWikis.php';
    }
    public function statistics() {
        $wikis = new WikiDAO();
        $wikisStati = $wikis->getNumWikis();
        $users = new UserDAO();
        $usersStati = $users->getNumUsers();
        $tags = new TagDAO();
        $tagsStati = $tags->getNumTags();
        $cats = new CategoryDAO();
        $catsStati = $cats->getNumCtas();
        include_once 'views\statistics.php';
    }

}
