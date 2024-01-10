<?php
class userDAO
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = Database::getInstance()->getConnection();
    }
    public function getUserById($id)
    {
        $query = "SELECT * FROM users WHERE idUser = '$id'";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch();
            $user = new User($row['idUser'], $row['user_name'], $row['email'], $row['password']);
        return $user;
    }


}


?>