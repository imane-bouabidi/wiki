<?php

include_once '../controllers/categorieController.php';
include_once  "../controllers/tagController.php";
include_once "../controllers/userController.php";
include_once "../controllers/wikiController.php";
include_once "../models/categories/categorieDAO.php";
include_once "../models/categories/categorie.php";
include_once "../models/tag/tagDAO.php";
include_once "../models/tag/tag.php";
include_once "../models/user/userDAO.php";
include_once "../models/user/user.php";
include_once "../models/wiki/wikiDAO.php";
include_once "../models/wiki/wiki.php";
include_once "../controllers/homeController.php";
include_once "../controllers/adminController.php";
include_once  "..\models\config\connexion.php";
include_once   "..\models\config\db_config.php";
$wikisDAO = new WikiDAO();
$tagsDAO = new TagDAO();
$catgsDAO = new CategoryDAO();

if (isset($_GET['search'])) {
    if ($_GET['search'] !== '') {
        $search = $_GET['search'];
        $wikis = $wikisDAO->getAllWikis();

        $tags = $tagsDAO->getAllTags();

        $catgs = $catgsDAO->getAllCategories();

        $json_result = [];

        foreach ($wikis as $wiki) {
            if (stristr($wiki->getTitre(), $search)) {
                $json_result[] = $wiki->getIdWiki();
            }
        }

        foreach ($tags as $tag) {
           
            if (stristr($tag->getTagName(), $search)) {
                $wikis_for_tags = $wikisDAO->get_wikis_for_tag($tag->getIdTag());
                foreach ($wikis_for_tags as $wiki) {
                    $json_result[] = $wiki->getIdWiki();
                }
            }
        }

        foreach($catgs as $catg) {
            if (stristr($catg->getCatName(), $search)) {
                $wikis_for_catgs = $wikisDAO->get_wikis_for_catg($catg->getIdCat());
                foreach ($wikis_for_catgs as $wiki) {
                    $json_result[] = $wiki->getIdWiki();
                }
                // print_r($json_result);
            }
        }

        echo json_encode($json_result);
        // print_r($tags) ;
        
    }
}
