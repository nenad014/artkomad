<?php

require_once '../bootstrap.php';

if(isset($_POST['addCatBtn'])) {
    $category->create();
}

if(isset($_POST['addItemBtn'])) {
    $products->create();
}