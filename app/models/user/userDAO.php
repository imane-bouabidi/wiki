<?php
class UserDAO
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getInstance()->getConnection();
    }

    public function getUserById($id)
    {
        $query = "SELECT * FROM users WHERE idUser = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch();

        if ($row) {
            $user = new User($row['idUser'], $row['user_name'], $row['email'], $row['password']);
            return $user;
        }

        return null;
    }

    public function registerUser($userName, $email, $password, $confirmPassword)
    {
        try {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $query = $this->pdo->prepare("INSERT INTO users (user_name, email, password) VALUES (:userName, :email, :password)");
            $query->bindParam(':userName', $userName);
            $query->bindParam(':email', $email);
            $query->bindParam(':password', $hashedPassword);
            $query->execute();

            echo '<div style="text-align : center; background-color : green; color : white">Registered successfully</div>';
            header('Location: index.php?action=logIn');
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                echo '<div style="text-align : center; background-color : red; color : white">Username or email are already taken. Please choose a different username.</div>';
            } else {
                echo '<div style="text-align : center; background-color : red; color : white">An error occurred during registration.</div>';
                error_log($e->getMessage());
            }
        }
    }


    public function loginUser($email, $password)
    {
        $query = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
        $query->bindParam(':email', $email);
        $query->execute();
        $row = $query->fetch();
        if (password_verify($password, $row['password'])) {
            if ($row['role'] == 'admin') {
                $_SESSION['admin'] = $row['idUser'];
                header('Location:index.php?action=adminDashboard');
            } else {
                $_SESSION['author'] = $row['idUser'];
                header('Location:index.php?action=authorDash');
            }
        }
    }

    public function getNumUsers()
    {
        $query = "SELECT count(*) as total from users";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result['total'];
    }
}
?>