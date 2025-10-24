<?php
session_start();

$page = $_GET['page'] ?? 'home';

$allowed_pages = ['home', 'blog', 'single-blog', 'about', 'contact'];
if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

include 'includes/header.php';
include "pages/{$page}.php";
include 'includes/footer.php';
