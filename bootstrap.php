<?php

$sesija = ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/session'));

var_dump($sesija);

session_start();

print_r($_SESSION);

require_once 'class/Connection.class.php';
require_once 'class/Category.class.php';
require_once 'class/Products.class.php';
require_once 'class/Admin.class.php';

$db = new Connection();
$conn = $db->getConnection();

$category = new Category($conn);
$products = new Products($conn);
$admin = new Admin($conn);