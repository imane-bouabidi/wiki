<?php
class HomeDAO
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = Database::getInstance()->getConnection();
    }
    public function getWikis()
    {
        $query = "SELECT * FROM categorie";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $cats = array();
        foreach ($result as $row) {
            $cats[] = new Categorie($row['idCat'], $row['cat_name'], $row['date_creation']);

        }
        return $cats;
    }
}


?>