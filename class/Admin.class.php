<?php

class Admin {

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function loginAdmin() {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM admin WHERE admin_email = ? AND admin_password = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$email, $password]);

        $loggedAdmin = $query->fetch(PDO::FETCH_OBJ);

        if($loggedAdmin != NULL) {
            $_SESSION['admin'] = $loggedAdmin;
            header('Location: dash.php');
        } else {
            header('Location: index.php');
        }
    }
}