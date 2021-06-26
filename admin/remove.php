<?php

require_once '../bootstrap.php';

if(isset($_GET['id'])) {
    $products->delete($_GET['id']);
}

if(isset($_GET['cat_id'])) {
    $category->delete($_GET['cat_id']);
}