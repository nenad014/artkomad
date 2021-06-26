<?php

class Products {

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function index() {
        $sql = "SELECT * FROM products";
        $query = $this->conn->query($sql);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    public function show($id) {
        $sql = "SELECT *,categories.cat_name FROM products INNER JOIN categories ON products.cat_id = categories.cat_id WHERE products.id = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$id]);
        $result = $query->fetch(PDO::FETCH_OBJ);

        return $result;
    }

    public function create() {
        $targetDir = '../assets/images/';
        $fileName = basename($_FILES['img']['name'][0]);
        $fileName2 = basename($_FILES['img']['name'][1]);
        $fileName3 = basename($_FILES['img']['name'][2]);
        $fileName4 = basename($_FILES['img']['name'][3]);
        $targetFilePath = $targetDir . $fileName;
        $targetFilePath2 = $targetDir . $fileName2;
        $targetFilePath3 = $targetDir . $fileName3;
        $targetFilePath4 = $targetDir . $fileName4;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        $allowTypes = array('jpg', 'jpeg', 'png', 'jfif');
        if(in_array($fileType, $allowTypes)) {
            move_uploaded_file($_FILES['img']['tmp_name'][0], $targetFilePath) && move_uploaded_file($_FILES['img']['tmp_name'][1], $targetFilePath2) && move_uploaded_file($_FILES['img']['tmp_name'][2], $targetFilePath3) && move_uploaded_file($_FILES['img']['tmp_name'][3], $targetFilePath4);
            $name = $_POST['name'];
            $details = $_POST['details'];
            $dimensions = $_POST['dimensions'];
            $characteristics = $_POST['characteristics'];
            if(!empty($fileName)) {
                $img1 = "assets/images/" . $_FILES['img']['name'][0];
            } else {
                $img1 = NULL;
            }
            if(!empty($fileName2)) {
                $img2 = "assets/images/" . $_FILES['img']['name'][1];
            } else {
                $img2 = NULL;
            }
            if(!empty($fileName3)) {
                $img3 = "assets/images/" . $_FILES['img']['name'][2];
            } else {
                $img3 = NULL;
            }
            if(!empty($fileName4)) {
                $img4 = "assets/images/" . $_FILES['img']['name'][3];
            } else {
                $img4 = NULL;
            }
            
            $cat_id = $_POST['cat_id'];

            $sql = "INSERT INTO products VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $query = $this->conn->prepare($sql);
            $query->execute([$name, $details, $dimensions, $characteristics, $img1, $img2, $img3, $img4, $cat_id]);
            $row_count = $query->rowCount();

            if($row_count == 1) {
                header('Location: products.php');
            } else {
                header('Location: add-item.php');
            }
        }
    }

    public function update() {
        $item_id = $_POST['item_id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $cat_id = $_POST['cat_id'];

        $img_1 = $_FILES['img']['name'][0];
        $img_2 = $_FILES['img']['name'][1];
        $img_3 = $_FILES['img']['name'][2];
        $img_4 = $_FILES['img']['name'][3];
        $p_img1 = $_POST['img1'];
        $p_img2 = $_POST['img2'];
        $p_img3 = $_POST['img3'];
        $p_img4 = $_POST['img4'];

        if(empty($img_1)) {
            $img_1 = $p_img1;
        } else {
            $img_1 = $_FILES['img']['name'][0];
            $temp_name = $_FILES['img']['tmp_name'][0];
            move_uploaded_file($temp_name, "../assets/images/$img_1");
        }
        if(empty($img_2)) {
            $img_2 = $p_img2;
        } else {
            $img_2 = $_FILES['img']['name'][1];
            $temp_name = $_FILES['img']['tmp_name'][1];
            move_uploaded_file($temp_name, "../assets/images/$img_2");
        }
        if(empty($img_3) || $img_3 == '') {
            $img_3 = $p_img3;
        } else {
            $img_3 = $_FILES['img']['name'][2];
            $temp_name = $_FILES['img']['tmp_name'][2];
            move_uploaded_file($temp_name, "../assets/images/$img_3");
        }
        if(empty($img_4) || $img_4 == '') {
            $img_4 = $p_img4;
        } else {
            $img_4 = $_FILES['img']['name'][3];
            $temp_name = $_FILES['img']['tmp_name'][3];
            move_uploaded_file($temp_name, "../assets/images/$img_4");
        }

        $img1 = "assets/images/".$img_1;
        if($img_2 == '') {
            $img2 = NULL;
        } else {
            $img2 = "assets/images/".$img_2;
        }
        if($img_3 == '') {
            $img3 = NULL;
        } else {
            $img3 = "assets/images/".$img_3;
        }
        if($img_4 == '') {
            $img4 = NULL;
        } else {
            $img4 = "assets/images/".$img_4;
        }
        
        $sql = "UPDATE products SET title = '$title', description = '$description', img1 = '$img1', img2 = '$img2', img3 = '$img3', img4 = '$img4', cat_id='$cat_id' WHERE id=$item_id";
        $query = $this->conn->query($sql);

        if($query) {
            header('Location: products.php');
        } else {
            header('Location: update-item.php?id='.$item_id);
        }
    }

    public function delete($id) {
        $sql = "DELETE FROM products WHERE id = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$id]);

        if($query) {
            header('Location: products.php');
        } else {
            header('Location: 404.php');
        }
    }

    public function getProductsByCategory($id) {
        $sql = "SELECT * FROM products  WHERE cat_id = ?";
        $query = $this->conn->prepare($sql);
        $query->execute([$id]);
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }
}