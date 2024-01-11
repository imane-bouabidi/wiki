<?php
class UserController {
    public function addUser() {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmPassword'];
        $userDAO = new UserDAO();
        $userDAO->registerUser($userName, $email, $password, $confirmpassword);
        include_once 'views\signUp.php';
    }
    public function logInSubmit() {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $userName = $_POST['UserName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userDAO = new UserDAO();
        $userDAO->loginUser($email, $password);
        include_once 'views\logIn.php';
    }

    // Ajoutez d'autres méthodes pour mettre à jour, supprimer, etc.
}

?>
