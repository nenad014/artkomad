<?php

class Category {

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function index() {
        $sql = "SELECT * FROM categories";
        $query = $this->conn->query($sql);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    public function create() {
        $cat_name = $_POST['cat_name'];
        $cat_img = $_FILES['cat_img']['name'];

        $temp_name = $_FILES['cat_img']['tmp_name'];

        move_uploaded_file($temp_name, "../assets/images/$cat_img");

        $sql = "INSERT INTO categories VALUES (NULL, ?, ?)";
        $query = $this->conn->prepare($sql);
        $query->execute([$cat_name, "assets/images/$cat_img"]);

        $row_count = $query->rowCount();

        if($row_count == 1) {
            header('Location: category.php');
        } else {
            header('Location: add-category.php');
        }
    }

    public function show($id) {
        $sql = "SELECT * FROM categories WHERE cat_id = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$id]);
        $result = $query->fetch(PDO::FETCH_OBJ);

        return $result;
    }
    public function update() {
        $cat_name = $_POST['cat_name'];
        $cat_id = $_POST['cat_id'];
        $cat_img = $_FILES['cat_img']['name'];
        $c_img = $_POST['c_img'];
        
        if(empty($cat_img)) {
            $cat_img = $c_img;
        } else {
            $cat_img = $_FILES['cat_img']['name'];
            $temp_name = $_FILES['cat_img']['tmp_name'];
            move_uploaded_file($temp_name, "../assets/images/$cat_img");  
        }

        $img = "assets/images/" . $cat_img;

        $sql = "UPDATE categories SET cat_name = '$cat_name', cat_img = '$img' WHERE cat_id = '$cat_id'";
        $query = $this->conn->query($sql);

        if($query) {
            header('Location: category.php');
        } else {
            header('Location: update-category.php?cat_id='.$cat_id);
        }
    }
    public function delete($id) {
        $sql = "DELETE FROM categories WHERE cat_id = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$id]);

        if($query) {
            header('Location: category.php');
        } else {
            header('Location: 404.php');
        }
    }
}