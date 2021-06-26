<?php

require_once '../bootstrap.php';

if(isset($_POST['updateCatBtn'])) {
    $category->update();
}
if(isset($_POST['updateItemBtn'])) {
    $products->update();
}