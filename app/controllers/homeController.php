<?php
class HomeController {
    public function ShowHome() {
        $wikis = new WikiDAO();
        $latestWikis = $wikis->getLatestWikis();
        $wikisDATA = $wikis->getAllWikis();
        $users = new UserDAO();
        $cat = new CategoryDAO();
        $latestCats = $cat->getLatestCats();
        $catDATA = $cat->getAllCategories();
        $tagDAO = new TagDAO();
        include 'views\home.php';
    }
    public function ShowSignUp() {
        include 'views\signUp.php';
    }
    public function logOut() {
        session_destroy();
        header('Location:index.php?action=home');
    }
    public function ShowLogIn() {
        include 'views\logIn.php';
    }
    public function ShowAuthorDash() {
        $wikis = new WikiDAO();
        $wikisDATA = $wikis->getAuthWikis();
        $cats = new CategoryDAO();
        $catsDATA = $cats->getAllCategories();
        include 'views\authorDashboard.php';
    }
    public function Showaddwiki() {
        $tags = new TagDAO();
        $tagsDATA = $tags->getAllTags();
        $cats = new CategoryDAO();
        $catsDATA = $cats->getAllCategories();
        include 'views\addWiki.php';
    }
    public function ShowdetailsPoste() {
        $id = $_GET['id'];
        $wiki = new WikiDAO();
        $users = new UserDAO();
        $cat = new CategoryDAO();
        $tagDAO = new TagDAO();
        $wikiDATA = $wiki->getWikiById($id);
        include 'views\detailsPoste.php';
    }

}

?>
