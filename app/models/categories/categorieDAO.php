<?php
class CategoryDAO
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = Database::getInstance()->getConnection();
    }
    public function getAllCategories()
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
    public function getCatById($id)
    {
        $query = "SELECT * FROM categorie where idCat= '$id'";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch();
            $cats = new Categorie($row['idCat'], $row['cat_name'], $row['date_creation']);

        return $cats;
    }

    public function getLatestCats($limit = 3)
{
    $query = "SELECT * FROM categorie ORDER BY date_creation DESC LIMIT :limit";
    $stmt = $this->pdo->prepare($query);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    
    $result = $stmt->fetchAll();
    $cats = array();
    
    foreach ($result as $row) {
        $cats[] = new Categorie($row['idCat'], $row['cat_name'], $row['date_creation']);
    }
    
    return $cats;
}

    public function addCatgory($date, $catName)
    {
        $query = "INSERT INTO categorie 
                  VALUES (0,:cat_name, :date_creation)";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':cat_name', $catName);
        $stmt->bindParam(':date_creation', $date);
        $stmt->execute();
        header('Location:index.php?action=adminDash');
    }

    public function updateCat($id,$nom)
    {
        $query = "UPDATE categorie SET cat_name = :nom
                  WHERE idCat = :id";

        $stmt = $this->pdo->prepare($query);
        
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':id', $id);

        $stmt->execute();
        header('Location:index.php?action=adminDash');

    }


    public function deleteCat($id)
    {
        $query = "DELETE FROM categorie WHERE idCat = :idCat";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':idCat', $id);
        $stmt->execute();
        header('Location:index.php?action=adminDash');
    }
}


?>