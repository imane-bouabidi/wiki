<?php
class HomeController {
    public function ShowHome() {
        include 'views\home.php';
    }
    public function ShowSignUp() {
        include 'views\signUp.php';
    }
    public function ShowLogIn() {
        include 'views\logIn.php';
    }
    public function Showaddwiki() {
        $tags = new TagDAO();
        $tagsDATA = $tags->getAllTags();
        $cats = new CategoryDAO();
        $catsDATA = $cats->getAllCategories();
        include 'views\addWiki.php';
    }
    public function ShowdetailsPoste() {
        include 'views\detailsPoste.php';
    }

}

?>